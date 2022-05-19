<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."sadasfdgfgfd12321412");

$mysql = new mysqli('localhost', 'root', '', 'register_db');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' ");
$user = $result->fetch_assoc();
if(count($user) == 0) {
    echo 'Такой пользователь не найден';
    exit();
}

setcookie('user', $user['name'], time() + 3600 * 24 * 30, "/autoregister");

$mysql->close();

header('Location: /autoregister');
