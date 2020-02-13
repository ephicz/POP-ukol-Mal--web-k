<?php
session_start();
if (isset($_SESSION['logged'])){
    if ($_SESSION['logged']){
        header('Location: http://localhost/Content.php');
        //echo "logged";
    }
}
if (!isset($_SESSION['registered'])){
    header('Location: http://localhost/Register.php');
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
$jmeno = $_POST['jmeno'];
$heslo = $_POST['heslo'];

if (is_string($jmeno)){
    $registered = true;
} else {
    $registered = false;
}

$_SESSION['jmeno'] = $jmeno;
$_SESSION['heslo'] = $heslo;
$_SESSION['registered'] = $registered;

echo $jmeno;

?>

<form class="" action="Content.php" method="post">
    <input type="text" name="jmenoLogin" value="" placeholder="Jmenoo">
    <input type="password" name="hesloLogin" value="" placeholder="Heslo">
    <input type="submit" name="" value="Prihlasit se">
</form>

</body>
</html>