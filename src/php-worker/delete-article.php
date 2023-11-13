<?php

    require 'bdd-manager.php';
    session_start();

    function checkInputValues() {
        if(!isset($_GET['id']) || !$_GET['id']) return false;
        return true;
    }

    function deleteData($bdd) {
        $request = "DELETE FROM articles WHERE id = {$_GET['id']}";
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

        if(!deleteData($bdd)) {
            databaseEror2();
            return false;
        }

        $_SESSION["error"] = false;
        header('location:../admin/list-articles.php');
    }

    main();

?>