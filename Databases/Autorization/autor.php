<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<h1>Авторизация</h1>
<form action="frombd.php" name="autorization" method="post" id="2">
    <lebel for="log">Введите логин:</lebel>
    <br /><input name="autlog" id="log" type="text" title="Логин" placeholder="Введите Логин" required="required" maxlength="100" >
    <br /><lebel for="pwd">Пароль:</lebel>
    <br /><input name="password" id="pwd" type="password" title="Пароль" placeholder="Введите пароль" required="required" maxlength="32">
    <br /><input name="submit" type="submit" value="Войти" title="Войти">
    <br/><a href="index.php" title="Зарегистрироваться">Регистрация</a>
</form>
</body>
</html>