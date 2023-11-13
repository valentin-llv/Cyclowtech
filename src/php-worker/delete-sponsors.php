<?php

    require 'bdd-manager.php';
    session_start();

    function checkInputValues() {
        if(!isset($_GET['id']) || !$_GET['id']) return false;

        return true;
    }

    function getImageName($bdd) {
        $request = "SELECT image_name FROM sponsors WHERE id = {$_GET['id']}";
        $result = $bdd->query($request);

        if(!$result) return false;
        return $result->fetch_assoc()['image_name'];
    }

    function checkFileExist($target_file) {
        if(file_exists($target_file)) return true;
        return false;
    }

    function deleteImage($target_file) {
        return unlink($target_file);
    }

    function deleteData($bdd) {
        $request = "DELETE FROM sponsors  WHERE id = {$_GET['id']}";
        $result = $bdd->query($request);

        if(!$result) return false;
        return true;
    }

    /* Error handling functions */

    function bddConnexionError() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Une erreur s'est produite lors de la connexion à la base de données.";
        header('location:../admin/list-sponsors.php'); 
    }

    function inputsError() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Une erreur s'est produite. ID non valide !";
        header('location:../admin/list-sponsors.php'); 
    }

    function databaseEror1() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Une erreur s'est produite lors de la lecture des données dans la base de données.";
        header('location:../admin/list-sponsors.php'); 
    }

    function databaseEror2() {
        $_SESSION["error"] = true;
        $_SESSION["error_value"] = "Une erreur s'est produite lors de la suppression des données dans la base de données.";
        header('location:../admin/list-sponsors.php'); 
    }

    /* Main */

    function main() {
        if(!$_SESSION["loggedin"]) header('location:../admin/login.php');

        $bdd = new BddManager();
        if(!$bdd) {
            bddConnexionError();
            return false;
        }

        if(!checkInputValues()) {
            inputsError();
            return false;
        }

        $file_name = getImageName($bdd);
        if(!$file_name) {
            databaseEror1();
            return false;
        }

        $target_dir = "../../public/images/supporters/";
        $target_file = $target_dir . $file_name;
        if(checkFileExist($target_file)) {
            deleteImage($target_file);
        }

        if(!deleteData($bdd)) {
            databaseEror2();
            return false;
        }

        $_SESSION["error"] = false;
        header('location:../admin/list-sponsors.php');
    }

    main();

?>