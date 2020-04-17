<?php
include "./database/DatabaseHandler.php";
include "login.phtml";

session_start();
if (isset($_SESSION['logged'])) {
    if ($_SESSION['logged']) {
        header('Location: /content');
        //echo "logged";
    }
}
if (!isset($_SESSION['registered'])) {
    header('Location: /register');
    //echo "not registered";
}
$jmenoLogin = $_POST['jmenoLogin'] ?? null;
$hesloLogin = $_POST['hesloLogin'] ?? null;
$logged = false;
$userLogin = new DatabaseHandler();

if (isset($_POST)) {
    if ($userLogin->login($jmenoLogin, $hesloLogin)) {  //hashujou jen plebs
        $logged = true;
        echo "<br><p class='reg'>Uspesne prihlasen!</p>";
        if (is_bool($logged)) {
            $_SESSION['logged'] = $logged;
        }
    } else {
        echo "<br><p class='reg'>Spatny jmeno nebo heslo!</p>";
    }
}