<?php

if(isset($_POST["submit"])) {
    $username = $_POST["userid"];
    $password = $_POST["password"];
    $passwordCheck = $_POST["passwordCheck"];
    $email = $_POST["email"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputRegister($username, $password, $passwordCheck, $email) !== false)
    {
        header("location: ../register.php?error=emptyInput");
        exit();
    }
    

    if(invalidUid($username) !== false)
    {
        header("location: ../register.php?error=invalidUid");
        exit();
    }
    

    if(invalidEmail($email) !== false)
    {
        header("location: ../register.php?error=invalidEmail");
        exit();
    }
    

    if(pwdMatch($passwordCheck, $password) !== false)
    {
        header("location: ../register.php?error=passwordsdontmatch");
        exit();
    }
    

    if(uidExists($conn, $username, $email) !== false)
    {
        header("location: ../register.php?error=usernametaken");
        exit();
    }
    

    createUser($conn, $username, $password, $email);
}
else {
    header("location: ../register.php");
}