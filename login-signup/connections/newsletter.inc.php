<?php
if (isset($_POST["submit"])) {
    $Ename = $_POST['Ename'];
    $Eemail = $_POST['Eemail'];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyNewsLetter($Ename, $Eemail) !== false) {
        header("Location: ../../index.php?error=emptynewsletterinput");
        exit();
    }
    if (invalidEmail($Eemail) !== false) {
        header("Location: ../../index.php?error=invalidemail");
        exit();
    }

    createNewsLetter($conn, $Ename, $Eemail);
}
else {
    header("Location: ../../index.php");
}