<?php
session_start();
if (!isset($_SESSION['registered'])){
    header('Location: /register');
    //echo "not registered";
}
if (!isset($_SESSION['logged'])){
    header('Location: /login');
    //echo "not logged";
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

<?php
$jmenoLogin = $_POST['jmenoLogin'] && null;
$hesloLogin = $_POST['hesloLogin'] && null;
$logged = false;

if ($jmenoLogin == $_SESSION['jmeno']){
    if ($hesloLogin == $_SESSION['heslo']){
        $logged = true;
        if (is_bool($logged)){
            $_SESSION['logged'] = $logged;
        }
        echo "
        <p>Lorem Ipsum je demonstrativní výplňový text používaný v tiskařském a knihařském průmyslu. Lorem Ipsum je považováno za standard v této oblasti už od začátku 16. století, kdy dnes neznámý tiskař vzal kusy textu a na jejich základě vytvořil speciální vzorovou knihu. Jeho odkaz nevydržel pouze pět století, on přežil i nástup elektronické sazby v podstatě beze změny. Nejvíce popularizováno bylo Lorem Ipsum v šedesátých letech 20. století, kdy byly vydávány speciální vzorníky s jeho pasážemi a později pak díky počítačovým DTP programům jako Aldus PageMaker.</p>
        <a href='logout.php'>logout</a>
        ";
    } else {
        echo "spatny heslo";
    }
} else {
    echo "spatny jmeno";
}
?>

</body>
</html>