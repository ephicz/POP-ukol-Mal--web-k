<?php
session_start();
if (isset($_SESSION['logged'])){
    if ($_SESSION['logged']){
        header('Location: /content');
        //echo "logged";
    }
}
if (!isset($_SESSION['registered'])){
    header('Location: /register');
    //echo "not registered";
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>



<?php
$jmeno = $_POST['jmeno'] && null;
$heslo = $_POST['heslo'] && null;

if (is_string($jmeno)){
    $registered = true;
} else {
    $registered = false;
}

if (is_string($jmeno)){
    $_SESSION['jmeno'] = $jmeno;
}

if (is_string($heslo)){
    $_SESSION['heslo'] = $heslo;
}

if (is_bool($registered)){
    $_SESSION['registered'] = $registered;
}

echo $jmeno;

?>

<form class="" action="content.php" method="post">
    <input type="text" name="jmenoLogin" value="" placeholder="Jmenoo" required>
    <input type="password" name="hesloLogin" value="" placeholder="Heslo" required>
    <input type="submit" name="" value="Prihlasit se">
</form>

</body>
</html>