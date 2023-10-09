<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION['user'] = null;
    session_start();
    require_once('controller/bd.php');
    ?>
    <form action="login.php" method="POST">
        <input type="text" name="login" id="">
        <input type="password" name="password" id="">
        <input type="submit" value="Войти">
    </form>
</body>
</html>