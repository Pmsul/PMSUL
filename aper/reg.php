<?php
if (empty($_POST)) {
    header('Location:../index.php?error=emptypost');
    exit();
}

require_once "../db/db.php";

$conn -> prepare('INSERT INTO users (login, password, fio, tel, email) values (?,?,?,?,?)') -> execute([
    $_POST['login'],
    $_POST['password'],
    $_POST['fio'],
    $_POST['tel'],
    $_POST['email']
]);

header('Location:../authPage.php');
