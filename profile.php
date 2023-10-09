<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ваш профиль:</h2>
    <?php
    require_once('model/User.php');
    require_once('model/Adress.php');
    session_start();
    $user = $_SESSION['user'];
    $adress = $_SESSION['adressArray'][$user->getAdress()];

    echo 'Имя: ' . $user->getName();
    echo '<br> Возраст: ' . $user->getAge();
    echo '<br> Страна: ' . $adress->getCountry();
    echo  '<br> Город: ' . $adress->getCity();
    ?>
    <br><a href="index.php">Назад</a>
</body>
</html>