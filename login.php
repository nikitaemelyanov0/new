<?php

require_once 'BD.php';
session_start();

$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE login='$login' AND password='$password'";

$result = $conn -> query($sql);

if ($result->num_rows>0) {
    $row = $result->fetch_assoc();
    $_SESSION['user']['id'] = $row['id'];
    header('location: profile.php');
}
else{
    echo 'непрвильно введен логин или пароль';
}

