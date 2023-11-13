<?php

    require 'bdd-manager.php';
    session_start();

    function articleId() {
        if((!isset($_POST['id']) || !$_POST['id']) && (!isset($_GET['id']) || !$_GET['id'])) return false;
        return true;
    }

    function updateImage($bdd) {
        if(!isset($_FILES["file"]) || !$_FILES["file"] || !$_FILES["file"]["tmp_name"]) return true;

        if(!(getimagesize($_FILES["file"]["tmp_name"]) !== false)) {
            imageInputError();
            return false;
        }

        $target_dir = "../../public/images/articles-cover/";
        $file_name = basename($_FILES['file']['name']);
        $target_file = $target_dir . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if(!file_exists($target_file)) {
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "webp") {
                fileFormatError();
                return false;
            } else {
                if(!move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    fileUploadError();
                    return false;
                }
            }
        }

        $request = "SELECT image_cover_name FROM articles WHERE id = {$_POST['id']}";
        $result = $bdd->query($request);

        if(!$result) {
            databaseEror1();
            return false;
        }

        $image_cover_name = $result->fetch_assoc()['image_cover_name'];
        $target_file_to_delete = $target_dir . $image_cover_name;

        if(file_exists($target_file_to_delete)) {
            unlink($target_file_to_delete);
        }

        $request = "UPDATE articles SET image_cover_name ='{$file_name}' WHERE id = {$_POST['id']}";
        $result = $bdd->query($request);

        if(!$result) {
            databaseEror2();
            return false;
        }

        return true;
    }

    function updateTitle($bdd) {
        if(!isset($_POST['name']) || !$_POST['name']) return true;

        $request = "UPDATE articles SET title ='{$_POST['name']}' WHERE id = {$_POST['id']}";
        $result = $bdd->query($request);

        if(!$result) {
            databaseEror2();
            return false;
        }

        return true;
    }

    function updateContent($bdd) {
        if(!isset($_POST['content']) || !$_POST['content']) return true;

        $request = "UPDATE articles SET content ='{$_POST['content']}' WHERE id = {$_POST['id']}";
        $result = $bdd->query($request);

        if(!$result) {
            databaseEror2();
            return false;
        }

        return true;
    }

    function updateDate($bdd) {
        if(!isset($_POST['date']) || !$_POST['date']) return true;

        $request = "UPDATE articles SET date ='{$_POST['date']}' WHERE id = {$_POST['id']}";
        $result = $bdd->query($request);

        if(!$result) {
            databaseEror2();
            return false;
        }

        return true;
    }

    function updateSummary($bdd) {
        if(!isset($_POST['summary']) || !$_POST['summary']) return true;

        $request = "UPDATE articles SET summary ='{$_POST['summary']}' WHERE id = {$_POST['id']}";
        $result = $bdd->query($request);

        if(!$result) {
            databaseEror2();
            return false;
        }

        return true;
    }

    function updateVisibility($bdd) {
        if(!isset($_GET['id']) || !$_GET['id']) return true;
        if(!isset($_GET['visibility']) || !$_GET['visibility']) return true;

        $request = "UPDATE articles SET visible ='{$_GET['visibility']}' WHERE id = {$_GET['id']}";
        $result = $bdd->query($request);

        if(!$result) {
            databaseEror2();
            return false;
        }

        return true;
    }
    
    /* Error handling functions */

    function inputsError() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Valeur des champs incorrect.";
        header('location:../admin/modify-article.php');
    }

    function imageInputError() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Image invalide.";
        header('location:../admin/modify-article.php?id=' . $_POST['id']);
    }

    function fileError() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Le fichier image existe déjà.";
        header('location:../admin/modify-article.php?id=' . $_POST['id']);
    }

    function fileFormatError() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Le fichier image n'est pas au bon format.";
        header('location:../admin/modify-article.php?id=' . $_POST['id']);
    }

    function fileUploadError() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Une erreur s'est produite lors de l'envoie du fichier.";
        header('location:../admin/modify-article.php?id=' . $_POST['id']);
    }

    function databaseEror1() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Une erreur s'est produite lors de la lecture des données dans la base de données.";
        header('location:../admin/modify-article.php?id=' . $_POST['id']);
    }

    function databaseEror2() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Une erreur s'est produite lors de la suppression des données dans la base de données.";
        header('location:../admin/modify-article.php?id=' . $_POST['id']); 
    }

    /* Main */

    function main() {
        if(!$_SESSION["loggedin"]) header('location:../admin/login.php');

        if(!articleId()) {
            header('location:../admin/list-articles.php');
            return false;
        }

        $bdd = new BddManager();
        if(!$bdd) {
            bddConnexionError();
            return false;
        }

        if(!updateImage($bdd)) return false;
        if(!updateTitle($bdd)) return false;
        if(!updateContent($bdd)) return false;
        if(!updateDate($bdd)) return false;
        if(!updateSummary($bdd)) return false;
        if(!updateVisibility($bdd)) return false;

        $_SESSION["error"] = false;
        header('location:../admin/list-articles.php'); 
    }

    main();

?>