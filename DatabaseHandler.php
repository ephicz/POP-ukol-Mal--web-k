<?php


class DatabaseHandler
{
    function dbPripojeni(){
        $db = mysqli_connect('localhost:3306', "root", "2000300", "webik");
        if (!$db) {
            echo "Chybaaaa" . PHP_EOL;
            echo "Zose chyba: " . mysqli_connect_errno() . PHP_EOL;
            die();
        }
        mysqli_set_charset($db,"utf8");
        return $db;
    }


    function checkRegister($jmeno){
        $this->$jmeno = $jmeno;
        $db = $this->dbPripojeni();
        $sql = "SELECT jmeno FROM login WHERE jmeno = '$jmeno'";
        $result = mysqli_query($db, $sql);
        $pocet = mysqli_num_rows($result);
        if ($pocet > 0){
            return false;
        } else {
            return true;
        }
    }


    function register($jmeno, $heslo)
    {
        $this->$jmeno = $jmeno;
        $this->$heslo = $heslo;
        $db = $this->dbPripojeni();
        $sql = "INSERT INTO login (jmeno, heslo) VALUES ('$jmeno', '$heslo')";
        $result = mysqli_query($db, $sql);
        if ($result){
            return "Uspesne prihlasen";
        } else {
            return "chyba oe";
        }
    }

    function login($jmeno, $heslo)
    {
        $this->$jmeno = $jmeno;
        $this->$heslo = $heslo;
        $db = $this->dbPripojeni();
        $sql = "SELECT jmeno FROM login WHERE jmeno = '$jmeno' AND heslo = '$heslo'";
        $result = mysqli_query($db, $sql);
        $pocet = mysqli_num_rows($result);
        if ($pocet > 0){
            return true;
        } else {
            return false;
        }
    }

}