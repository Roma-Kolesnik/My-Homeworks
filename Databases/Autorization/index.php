<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<h1>Форма регистрации</h1>
<form action="indb.php" name="registration" method="post" id="1">
    <label for="names">Имя: </label>
    <br /><input title="Имя" name="names" type="text" id="names" placeholder="Введите имя" maxlength="50" required="required">
    <br /><label for="login">Ваш логин: </label>
    <br /><input title="Логин" type="text" name="login" id="login" placeholder="Введите логин"  maxlength="50" required="required">
    <br /><label for="password">Ваш пароль: </label>
    <br /><input title="Пароль" type="password" name="password" id="password" placeholder="Введите пароль"  maxlength="32" required="required">
    <br /><label for="email">E-mail:</label>
    <br /><input type="email" id="email" name="email" title="Email" placeholder="Ваш E-mail" maxlength="100" required="required">
    <br /><label for="age">Ваш возраст:</label>
    <br /><input name="age" id="age" title="Возраст" placeholder="Ваш возраст" type="number"  maxlength="3" required="required"><br />
    Укажите пол:
    <br /><label for="m">Мужской</label>
    <input type="radio" name="gender" id="m" value="m">
    <label for="f">Женский</label>
    <input type="radio" name="gender" id="f" value="f">
    <!--<select name="gender">
        <option value="0">Жен.</option>
        <option value="1">Муж.</option>
    </select>-->
    <br /><input name="submit" type="submit" value="Зарегистрироваться" title="Зарегестрироваться">
    <br /><a href="autor.php" title="Если вы уже зарегистрированы">Авторизация</a>
</body>
</html>
