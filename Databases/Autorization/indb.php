<?php


$link = mysqli_connect("localhost","root","","users");

if(mysqli_connect_errno()){
    echo "Ошибка в подключение к БД (".mysqli_connect_errno().")".": ".mysqli_connect_error();
}

if(isset($_POST['submit'])) {
    if (!empty($_POST['names']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['age'])) {
        $name = trim($_POST['names']);
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);
        $age = trim($_POST['age']);
        $gender = trim($_POST['gender']);
        $query = "INSERT INTO `info` SET `names` = '$name', `login` = '$login', `pass` = '$password', `email` = '$email', `age` = $age, `gender` = '$gender', `date-time` = now()" ;
        mysqli_query($link, $query);
        echo "Поздравляем! Вы успешно прошли регистрацию."."<br>";
        echo "Теперь вы можете "."<a href='autor.php' title='Авторизация'>авторизоваться</a>";
    } else {
        echo "Ошибка";
    }
}







?>




