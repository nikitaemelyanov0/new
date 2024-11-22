<?php
session_start();
require_once 'BD.php';
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO `users`(login, password, email) VALUES ('$login', '$password', '$email')";

if ($conn -> query($sql) === true) {
    echo 'da';
}
