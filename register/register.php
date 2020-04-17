<?php
include './database/DatabaseHandler.php';
include 'register.phtml';

$registered = false;

session_start();
if (isset($_SESSION['registered'])) {
    if ($_SESSION['registered']) {
        header('Location: /login');
        //echo "registered";
    }
}
$jmeno = $_POST['jmeno'] ?? null;
$heslo = $_POST['heslo'] ?? null;

if (isset($_POST)) {
    if (is_string($jmeno)) {
        if (is_string($heslo)) {
            $user = new DatabaseHandler();
            if ($user->checkRegister($jmeno)) {
                $registered = true;
                echo $user->register($jmeno, $heslo); // nehashujem sefe podporujem hackery
            } else {
                echo "<br><p class='reg'>Jmeno zabrano</p>";
            }
        } else {
            $registered = false;
        }
    } else {
        $registered = false;
    }
}

if (is_bool($registered)) {
    $_SESSION['registered'] = $registered;
}

