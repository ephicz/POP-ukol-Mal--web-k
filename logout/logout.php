<?php

include "logout.phtml";

session_start();
if (!isset($_SESSION['registered'])){
    header('Location: /register');
    //echo "not registered";
}
if (!isset($_SESSION['logged'])){
    header('Location: /login');
    //echo "not logged";
}

session_destroy();

