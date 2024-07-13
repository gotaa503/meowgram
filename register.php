<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    $isValid = false;
    foreach ($users as $user) {
        list($storedUsername, $storedPassword) = explode(':', $user);
        if ($storedUsername === $username && $storedPassword === $password) {
            $isValid = true;
            break;
        }
    }
    if ($isValid) {
        echo 'Вход успешен!';
    } else {
        echo 'Неверное имя пользователя или пароль.';
    }
}
?>
  
