<?php
session_start();
require_once('model/Adress.php');
require_once('model/User.php');
//имитация выгрузки бд
$admin = new User(0,'user',0,'qwerty227',0,2);
$u1 = new User(1,'Alex',18, '444', 1,1);

if (!isset($_SESSION['userArray'])) {
    $_SESSION['userArray'] = [];
    array_push($_SESSION['userArray'],$admin);
    array_push($_SESSION['userArray'],$u1);
    $_SESSION['currentID'] = 1;
}
$adminAdress = new Adress(0,'Russia','Moscow');
$a1 = new Adress(0,'Russia','Uryupinsk');

if (!isset($_SESSION['adressArray'])) {
    $_SESSION['adressArray'] = [];
    array_push($_SESSION['adressArray'], $adminAdress);
    array_push($_SESSION['adressArray'], $a1);
}
?>