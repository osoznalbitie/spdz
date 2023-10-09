<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php
    require_once('model/User.php');
    require_once('model/Adress.php');
    session_start();
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $pass = $_POST['password'];
        $userArray = $_SESSION['userArray'];
        $admin = $userArray[0];
        if ($login != $admin->getName()  || $pass != $admin->getPassword()) {
            die('неправильно');
        }
    }
    ?>
</head>
<body>
    <a href="index.php">Назад</a>
    <div class="forms">
        <form action="controller/add_user.php" method="post">
            <h2>Добавить пользователя</h2>
            <label for="">Имя</label>
            <input type="text" name='name' required>
            <label for="">Пароль</label>
            <input type="password" name="password" required>
            <label for="">Возраст</label>
            <input type="text" name="age" required>
            <label for="">Город</label>
            <input type="text" name="city" required>
            <label for="">Страна</label>
            <input type="text" name="country" required>
            <label for="">Роль</label>
            <select name="role" required>    
                <option value="1">Пользователь</option>
                <option value="2">Администратор</option>
            </select>
            <input type="submit" value="Добавить">
        </form>
        <form action="controller/delete_user.php" method='post'>
            <h2>Удалить пользователя</h2>
            <label for="">ID пользователя</label>
            <input type="text" name='id' required>
            <input type="submit" value="Удалить">
        </form>
    </div>
    <div class="list">
        <table>
            <tr><td>ID</td><td>Имя</td><td>Возраст</td><td>Страна</td><td>Город</td></tr>
            <?php
            foreach ($_SESSION['userArray'] as $user) {
                //получаем связанный объект адреса
                $aUser = $_SESSION['adressArray'][$user->getAdress()];
                echo "
                <tr><td>" . $user->getID() . "</td><td>" . $user->getName() ."</td><td>" . $user->getAge() ."</td><td>" . $aUser->getCountry() ."</td><td>" . $aUser->getCity() . "</td>";
            }
            ?>
        </table>
    </div>
</body>
<style>
    table {
        border-collapse: collapse;
    }
    td {
        border: 1px solid #000;
    }
</style>
</html>