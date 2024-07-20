<?php
if (isset($_POST["submit"])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyContacts($fname, $lname, $email, $message) !== false) {
        header("Location: ../../contact.php?error=emptymessagebox");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("Location: ../../contact.php?error=invalidemail");
        exit();
    }

    createContacts($conn, $fname, $lname, $email, $message);
}
else {
    header("Location: ../../contact.php");
}