<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Обратная связь">
    <title>Обратная связь</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body class="feedback">
    <header class="head_feedback head_title">
        <a href="index.php"><button class="button_main"
                style="position: fixed; left: 800px;top:20px; width: 307px;height: 54px;">Назад</button></a>
    </header>
    <form style="position: absolute; left: 40%; top: 20%;" action="https://httpbin.org/post" method="POST"
        enctype="multipart/form-data">
        <p><strong>ФИО</strong><br>
            <input type="login" maxlenght="25" size="25" name="login">
        </p>
        <p><b>Email</b><br>
            <input type="email" maxlength="25" size="40" name="email">
        </p>
        <p><b>Как узнали о нас</b><Br>
            <input type="radio" name="question" value="yes"> Друзья<br>
            <input type="radio" name="question" value="no"> Реклама<br>
        </p>
        <select size="1" style="width: 100px;">
            <option disabled>Выберите опцию</option>
            <option value="1">Жалоба</option>
            <option value="2">Предложение</option>
        </select>
        <p>Комментарий<br>
            <textarea name="comment" cols="40" rows="3"></textarea>
        </p>
        <p><input type="file" name="f"></p>
        <p><input type="checkbox"> Даю согласие на обработку персональных данных</p>
        <p><input type="submit" value="Отправить">
            <input type="reset" value="Очистить">
        </p>
    </form>

    <footer>
        <div class="site-footer" style="position: absolute; left: 0%; top: 1400px">
            <p style="position: absolute; left: 25%;top:50px;">© Глеб, 2003-2022 Контактный телефон: 8-800-555-35-35</p>
            <p style="position: absolute; left: 25%;top:150px;">Сайт для моих достижений</p>
            <p style="position: absolute; left: 25%;top:250px;">С BG помог https://vk.com/andrushkass</p>
            <p style="position: absolute; left: 25%;top:350px;"><?php require('time.php') ?></p>
        </div>
    </footer>
</body>