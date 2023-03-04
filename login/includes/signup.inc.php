<?php

if(isset($_POST["register"]))
{
    $uid = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $password, $confirm_password);

    $signup->signupUser();

    header("location: ../signin.php?error=none");
}