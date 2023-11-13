<?php

    session_start();

    function checkInputValues() {
        if(!isset($_POST['user']) || !$_POST['user']) return false;
        if(!isset($_POST['password']) || !$_POST['password']) return false;

        return true;
    }

    function checkPassword() {
        if($_POST['user'] == "" && $_POST['password'] == "") return true;
        else return false;
    }

    function loginError() {
        $_SESSION["loggedin"] = false;
        header('location:../admin/login.php');
    }

    function loginSucces() {
        $_SESSION["loggedin"] = true;
        header('location:../admin/admin.php');
    }

    function main() {
        if(!checkInputValues()) {
            loginError();
            return false;
        }

        if(!checkPassword()) {
            loginError();
            return false;
        }

        loginSucces();
        return true;
    }

    main();

?>