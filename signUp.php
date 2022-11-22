<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Вход">
    <title>Вход</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body class="signUp">
    <header class="head_signUp head_title">
    <a href="index.php"><button class = "button_main" style="position: fixed; left: 800px;top:20px; width: 307px;height: 54px;">Назад</button></a>>
    </header>

    <form action="https://httpbin.org/post" method="POST" enctype="multipart/form-data" class="text"
        style="position: absolute; left: 45%;top:27%; width: 45%;">
        <label for="login">Логин <br><br><em></em></label>
        <input id="login"><br>
        <label for="password">Пароль <br><br><em></em></label>
        <input id="password" type="password"><br>
        <input type="checkbox" name="option5" value="a5">Запомнить меня</p>
        <p><input type="submit" class="button_main" value="               Войти               "></p>
    </form>

    

    <footer>
    <div class="site-footer" style="position: absolute; left: 0%; top: 1000px">
            <p style="position: absolute; left: 25%;top:50px;">© Глеб, 2003-2022 Контактный телефон: 8-800-555-35-35</p>
            <p style="position: absolute; left: 25%;top:150px;">Сайт для моих достижений</p>
            <p style="position: absolute; left: 25%;top:250px;">С BG помог https://vk.com/andrushkass</p>
            <p style="position: absolute; left: 25%;top:350px;"><?php require('time.php') ?></p>
        </div>
    </footer>
</body>