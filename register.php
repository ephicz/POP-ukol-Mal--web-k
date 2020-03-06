<?php
session_start();
if (isset($_SESSION['registered'])) {
    if ($_SESSION['registered']) {
        header('Location: /login');
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="general.css">
    <title>Register</title>
</head>
<body>
<h1>Mega dobra stranka</h1>
<p>Registrace | <a href='/login'>Login</a> | <a href="/content">Content</a> | <a href='/logout'>Logout</a></p>
<div class="wrap">
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Jmeno</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jmeno"
                   value="" placeholder="Jmenoo" required>
            <small id="emailHelp" class="form-text text-muted">(Jmeno nebo prezdivka)</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="heslo" value=""
                   placeholder="Heslo" required>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Souhlasim s ukradenim dat</label>
        </div>
        <button type="submit" class="btn btn-primary">Registrovat</button>
        <?php
        $jmeno = $_POST['jmeno'] ?? null;
        $heslo = $_POST['heslo'] ?? null;

        if (is_string($jmeno)) {
            if (is_string($heslo)) {
                $registered = true;
                echo "<br><p class='reg'>Uspesne registrovan!</p>";
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
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>