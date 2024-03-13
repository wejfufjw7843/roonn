<?php

// Заранее заданные значения логина и пароля
$correct_username = 'admin';
$correct_password = 'password123';

// Проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Проверяем введенные значения с заданными
    if ($username === $correct_username && $password === $correct_password) {
        echo 'Добро пожаловать!';
    } else {
        echo 'Ошибка входа';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Простая система входа</title>
</head>
<body>

<h1>Вход на сайт</h1>

<form method="post">
    <label for="username">Логин:</label><br>
    <input type="text" id="username" name="username"><br><br>

    <label for="password">Пароль:</label><br>
    <input type="password" id="password" name="password"><br><br>

    <button type="submit">Войти</button>
</form>

</body>
</html>

?>