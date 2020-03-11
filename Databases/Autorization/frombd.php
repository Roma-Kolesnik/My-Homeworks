<?php

$link = mysqli_connect("localhost", "root", "", "users");

if (mysqli_connect_errno()) {
    echo "Ошибка в подключение к БД (" . mysqli_connect_errno() . ")" . ": " . mysqli_connect_error();
}
if (isset($_POST['submit'])) {
    if (!empty($_POST['autlog']) && !empty($_POST['password'])) {
        $login = $_POST['autlog'];
        $pass = $_POST['password'];
        $query = "SELECT * FROM `info` WHERE `login` = '$login' AND `pass` = '$pass'";
        $result = mysqli_query($link, $query);
        $user = mysqli_fetch_assoc($result);
        if (!empty($user)) {
            echo "Вы удачно прошли авториацию!";
        }else{
            echo 'Вы ввели не верные данны, либо же такого пользователя не существует => '.'<a href="autor.php" title="Авторизация">Попробовать ещё раз</a>'."<br>";
            echo 'Что бы зарегестрироваться переходите по ссылке => '. '<a href="index.php" title="Регистрация">Регистрация</a>';
        }
    }
}


?>