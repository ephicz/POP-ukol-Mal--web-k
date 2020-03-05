<?php
session_start();
if (isset($_SESSION['registered'])) {
    if ($_SESSION['registered']) {
        header('Location: /login');
        //echo "registered";
    }
}

$jmeno = $_POST['jmeno'] ?? null;
$heslo = $_POST['heslo'] ?? null;

if (is_string($jmeno)) {
    if (is_string($heslo)) {
        $registered = true;
        echo "uspesne registrovan";
        echo "<a href='/login'>Login</a>";
    } else {
        $registered = false;
    }
} else {
    $registered = false;
}

if (is_string($jmeno)) {
    $_SESSION['jmeno'] = $jmeno;
}

if (is_string($heslo)) {
    $_SESSION['heslo'] = $heslo;
}

if (is_bool($registered)) {
    $_SESSION['registered'] = $registered;
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

<form method="post">
    <input type="text" name="jmeno" value="" placeholder="Jmenoo" required>
    <input type="password" name="heslo" value="" placeholder="Heslo" required>
    <input type="submit" name="" value="Registrovat">
</form>
</body>
</html>