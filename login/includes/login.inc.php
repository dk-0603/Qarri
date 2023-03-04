<?php

if(isset($_POST["register"]))
{
    $uid = $_POST["username"];
    $password = $_POST["password"];


    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($uid, $password);

    $login->loginUser();

    header("location: ../../index.php");
}