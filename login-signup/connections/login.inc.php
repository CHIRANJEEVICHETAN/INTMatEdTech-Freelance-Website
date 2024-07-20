<?php 

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pass"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    // if (invalidLoginEmail($username) !== false) {
    //     header("location: ../login.php?error=invalidemail");
    //     exit();
    // }
    // if (LoginemailExists($conn, $email) !== false) {
    //     header("location: ../login.php?error=emailtaken");
    //     exit();
    // }

    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../login.php");
    exit();
}