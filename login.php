<?php
require_once('model/User.php');
require_once('model/Adress.php');
session_start();
$login = $_POST['login'];
$pass = $_POST['password'];

if (isset($_POST['login']) && isset($_POST['password'])) {
    foreach ($_SESSION['userArray'] as $user) {
        if ($user->getName() == $login && $user->getPassword() == $pass) {
            $_SESSION['user'] = $user;
            if ($user->getRole() == 2) {
                header('Location: panel.php');
                die;
            }

            header('Location: profile.php');
            die;
        }
    }
    die('Ошибка входа');
}
else {
    die('Ошибка входа2');
}

?>