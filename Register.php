<?php
session_start();
if (isset($_SESSION['registered'])){
    if ($_SESSION['registered']){
        header('Location: http://localhost/Login.php');
        //echo "registered";
    }
}
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>

<form class="" action="Login.php" method="post">
    <input type="text" name="jmeno" value="" placeholder="Jmenoo">
    <input type="password" name="heslo" value="" placeholder="Heslo">
    <input type="submit" name="" value="Registrovat">
</form>
</body>
</html>