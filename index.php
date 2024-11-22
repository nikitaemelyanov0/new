<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hi</h1>

    <form action="registration.php" method="post">
        <input type="text" placeholder="login" name="login" required> <br>
        <input type="text" placeholder="password" name="password" required><br>
        <input type="text" placeholder="email" name="email" required><br>
        <button type="submit">Зарегистрироваться</button>
    </form>

    <form action="login.php" method="post">
        <input type="text" placeholder="login" name="login"><br>
        <input type="text" placeholder="password" name="password"><br>
        <button type="submit">Войти</button>
    </form>

</body>
</html>