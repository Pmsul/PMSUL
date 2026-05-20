<?php
if (empty($_POST)){
    header("Location:../authPage.php?error=emptypost");
    exit();
}

require_once "../db/db.php";

$chechUser = $conn->prepare("SELECT * FROM users WHERE login = ?");
$chechUser -> execute([
    $_POST['login']
]);

$chechUser = $chechUser -> fetch();

if(!$chechUser || !password_verify($_POST['password'], $chechUser['password'])){
    header("Location:../authPage.php?error=regOK");
}

if($chechUser['role']=='admin'){
    $homePage = '../AdminPage.php';
}
if($chechUser['role']=='user'){
    $homePage = '../userPage.php';
}

session_start();
$_SESSION['user'] = $chechUser;

header("Location: ".$homePage);
