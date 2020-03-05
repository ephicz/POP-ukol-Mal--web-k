<?php
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
$jmenoLogin = $_POST['jmenoLogin'] ?? null;
$hesloLogin = $_POST['hesloLogin'] ?? null;
$logged = false;

if ($jmenoLogin == $_SESSION['jmeno']) {
    if ($hesloLogin == $_SESSION['heslo']) {
        $logged = true;
        echo "uspesne prihlasen";
        echo "<a href='/content'>Content</a>";
        if (is_bool($logged)) {
            $_SESSION['logged'] = $logged;
        }
    } else {
        echo "spatny heslo";
        echo "<a href='/logout'>Forgot pass</a>";
    }
} else {
    echo "spatny jmeno";
    echo "<a href='/logout'>Forgot name</a>";
}

?>

<form class="" method="post">
    <input type="text" name="jmenoLogin" value="" placeholder="Jmenoo" required>
    <input type="password" name="hesloLogin" value="" placeholder="Heslo" required>
    <input type="submit" name="" value="Prihlasit se">
</form>

</body>
</html>