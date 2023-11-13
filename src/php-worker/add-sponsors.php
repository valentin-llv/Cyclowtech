<?php

    require 'bdd-manager.php';
    session_start();

    function checkInputValues() {
        if(!isset($_POST['name']) || !$_POST['name']) return false;
        if(!isset($_POST['link']) || !$_POST['link']) return false;

        if(isset($_FILES["file"])) {
            if(!(getimagesize($_FILES["file"]["tmp_name"]) !== false)) return false;
        } else return false;

        return true;
    }

    function checkFileExist($target_file) {
        if(file_exists($target_file)) return false;
        return true;
    }

    function checkFileFormat($imageFileType) {
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "webp") return false;
        return true;
    }

    function uploadFile($target_file, $file_name) {
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) return true;
        else return false;
    }

    function saveData($file_name) {
        $bdd = new BddManager();
        if(!$bdd) return false;

        $request = "INSERT INTO sponsors (sponsor_name, image_name, link) VALUES ('{$_POST['name']}', '{$file_name}', '{$_POST['link']}')";
        $result = $bdd->query($request);

        if(!$result) return false;
        return true;
    }

    /* Error handling functions */

    function inputsError() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Valeur des champs incorrect.";
        header('location:../admin/add-sponsors.php'); 
    }

    function fileError() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Le fichier image existe déjà.";
        header('location:../admin/add-sponsors.php'); 
    }

    function fileFormatError() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Le fichier image n'est pas au bon format.";
        header('location:../admin/add-sponsors.php'); 
    }

    function fileUploadError() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Une erreur s'est produite lors de l'envoie du fichier.";
        header('location:../admin/add-sponsors.php'); 
    }

    function databaseEror() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Une erreur s'est produite lors de la sauvgarde des données dans la base de données.";
        header('location:../admin/add-sponsors.php'); 
    }

    /* Main */

    function main() {
        if(!$_SESSION["loggedin"]) header('location:../admin/login.php');

        if(!checkInputValues()) {
            inputsError();
            return false;
        }

        $target_dir = "../../public/images/supporters/";
        $file_name = basename($_FILES['file']['name']);
        $target_file = $target_dir . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if(!checkFileExist($target_file)) {
            fileError(); 
            return false;
        }

        if(!checkFileFormat($imageFileType)) {
            fileFormatError();
            return false;
        }

        if(!uploadFile($target_file, $file_name)) {
            fileUploadError();
            return false;
        }

        if(!saveData($file_name)) {
            databaseEror();
            return false;
        }

        $_SESSION["error"] = false;
        header('location:../admin/admin.php');
    }

    main();

?>