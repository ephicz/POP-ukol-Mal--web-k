<?php

$url =  $_SERVER['REQUEST_URI'];


switch ($url){
    case '/register':
        $filename = 'register.php';
        break;
    case '/login':
        $filename = 'login.php';
        break;
    case '/content':
        $filename = 'content.php';
        break;
    case '/logout':
        $filename = 'logout.php';
        break;
    default:
        $filename = '404.php';
}

// TODO always initialize $filename
require $filename;