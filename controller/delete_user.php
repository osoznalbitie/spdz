<?php
require_once('../model/User.php');
require_once('../model/Adress.php');
session_start();
if (isset($_POST['id'])) {
    if ($_POST['id'] == 0) {
        echo '<a href="/panel.php">Назад</a> <br>';
        die('Нельзя удалить Гл. Администратора');
    }

    for ($i = 0; $i < count($_SESSION['userArray']); $i++) {
        if ($_SESSION['userArray'][$i]->getID() == $_POST['id']) {
            unset($_SESSION['userArray'][$i]);
            header('Location: /panel.php');
            die;
        }
    }
}
die('Ошибка');
?>