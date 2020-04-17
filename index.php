<?php

$url =  $_SERVER['REQUEST_URI'];

switch ($url){
    case '/register/':
    case '/':
        $filename = 'register/register.php';
        break;
    case '/login/':
        $filename = 'login/login.php';
        break;
    case '/content/':
        $filename = 'content/content.php';
        break;
    case '/logout/':
        $filename = 'logout/logout.php';
        break;
    default:
        $filename = '404/404.php';
}

require $filename;