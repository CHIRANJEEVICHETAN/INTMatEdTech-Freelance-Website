<?php

function emptyInputSignup($name, $email, $username, $phone, $pwd, $pwd_re) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($phone) || empty($pwd) || empty($pwd_re)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {

        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwd_re) {
    $result;
    if ($pwd !== $pwd_re) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM registration WHERE usersUid = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $phone, $pwd) {
    $sql = "INSERT INTO registration (name, email, usersUid, phone, pass) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    // $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    // $hashed_re_Pwd = password_hash($pwd_re, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "sssis", $name, $email, $username, $phone, $pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
    
}

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

// function invalidLoginEmail($email) {
//     $result;
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $result = true;
//     }
//     else {
//         $result = false;
//     }
//     return $result;
// }



// function loginUser($conn, $username, $pwd) {
//     $uidExists = uidExists($conn, $username, $username);

//     if ($uidExists === false) {
//         header("location: ../login.php?error=wronglogin");
//         exit();
//     }

//     $pwdHashed = $uidExists["pass"];
//     $checkPwd = password_verify($pwd, $pwdhashed);

//     if ($checkPwd === false) {
//         header("Location: ../login.php?error=wronglogin");
//         exit();
//     }
//     else if ($checkPwd === true) {
//         session_start();
//         $_SESSION["userid"] = $uidExists["id"];
//         $_SESSION["useruid"] = $emailExists["usersUid"];
//         header("Location: ../.././index.php");
//         exit();

//     }
// }

function loginUser($conn, $username, $pwd)
{
    $userData = uidExists($conn, $username, $username);

    if ($userData === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $userData["pass"];
    if ($pwd == $pwdHashed) {
        $checkPwd = true;
    } else {
        $checkPwd = false;
    }
    // $checkPwd = ($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("Location: ../login.php?error=wronglogin");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $userData["id"];
        $_SESSION["useruid"] = $userData["usersUid"];
        header("Location: ../../index.php");
        exit();
    }
}

function emptyNewsLetter($Ename, $Eemail) {
    $result;
    if (empty($Ename) || empty($Eemail)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function createNewsLetter($conn, $Ename, $Eemail) {
    $sql = "INSERT INTO newsletter (name, email) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../index.php?error=stmtfailed");
        exit();
    }

    // $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    // $hashed_re_Pwd = password_hash($pwd_re, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "ss", $Ename, $Eemail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../../index.php?error=none");
    exit();
    
}

function emptyContacts($fname, $lname, $email, $message) {
    $result;
    if (empty($fname) || empty($lname) || empty($email) || empty($message)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function createContacts($conn, $fname, $lname, $email, $message) {
    $sql = "INSERT INTO contactmessage (fname, lname, email, message) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../contact.php?error=stmtfailed");
        exit();
    }

    // $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    // $hashed_re_Pwd = password_hash($pwd_re, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $message);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../../contact.php?error=none");
    exit();
    
}