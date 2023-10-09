<?php
require_once('../model/User.php');
require_once('../model/Adress.php');
session_start();
foreach($_SESSION['userArray'] as $user)
    if ($user->getName() == $_POST['name']) {
        echo '<a href="/panel.php">Назад</a> <br>';
        die('Пользователь уже существует');
    }

$newAdress = new Adress(count($_SESSION['adressArray']), $_POST['city'],$_POST['country']);
array_push($_SESSION['adressArray'],$newAdress);

$newUser = new User(count($_SESSION['userArray']),$_POST['name'],$_POST['age'], $_POST['password'],count($_SESSION['adressArray'])-1,$_POST['role']);
array_push($_SESSION['userArray'], $newUser);

header('Location:/panel.php');
?>