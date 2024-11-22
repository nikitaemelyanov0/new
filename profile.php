<?php
    session_start();
    require_once 'BD.php';

    $iduser = $_SESSION['user']['id'];
    if ($iduser=='') {
        header('location: index.php');
    }

    $sql =  "SELECT * FROM `users` WHERE id='$iduser'";
    $result = $conn -> query($sql);
    $row = $result->fetch_assoc();
    $login=$row['login'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
    <?=$login?>
</body>
</html>
