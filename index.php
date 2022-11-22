<?php include("index3.php")?>

<?php $array = [
    '<li>арктический,</li>',
    '<li>субарктический,</li>',
    '<li>северный умеренный,</li>',
    '<li>северный субтропический,</li>',
    '<li>северный тропический,</li>',
    '<li>северный субэкваториальный,</li>',
    '<li>экваториальный,</li>',
    '<li>южный субэкваториальный,</li>',
    '<li>южный тропический,</li>',
    '<li>южный субтропический,</li>',
    '<li>южный умеренный,</li>',
    '<li>субантарктический,</li>',
    '<li>антарктический.</li>'
]
 ?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Достижения Глеба Назаренко">
    <title><?php echo($index); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body link="white" alink="white" vlink="white" id="begin">
    <header class="site-header head_title" >
      <a href="<?php	// начинаем первый PHP скрипт

      $name='Nature Life'; // переменная с текстом ссылки
      $link='registration.php';	// переменная с адресом ссылки
      $current_page=true;	// переменная, определяющая активность пункта меню

      echo $link;	// выводим адрес ссылки
      ?>"><?php	// начинаем второй PHP скрипт

      if( $current_page )	// если пункт меню активный
      	// выводим текст ссылки
      ?><button class="button_signUp"
                style="position: fixed; left: 30%;top:260px; width: 16%;height: 5%;">Регистрация</button></a>

      <a href="<?php	// начинаем первый PHP скрипт

      $name='Nature Life'; // переменная с текстом ссылки
      $link='signUp.php';	// переменная с адресом ссылки
      $current_page=true;	// переменная, определяющая активность пункта меню

      echo $link;	// выводим адрес ссылки
      ?>"><?php	// начинаем второй PHP скрипт

      if( $current_page )	// если пункт меню активный
   
      ?><button class="button_reg"
                style="position: fixed; left: 54%;top:260px; width: 16%;height: 5%;">Вход</button></a>
    </header>

    <div class="container">
        <h2 style="position: absolute; left: 15%;top:114%;">Разнообразные достижения</h2>
        <a style="position: absolute; left: 15%;top:152%;" class="advantages-item vip" href="#part1">Ранние годы</a>
        <a style="position: absolute; left: 15%;top:165%;" class="advantages-item vip" href="#part2">Школьные годы</a>
        <a style="position: absolute; left: 15%;top:178%;" class="advantages-item vip" href="#part3">Студенческие
            годы</a>
    </div>



    <section>
        <h2 class="features" style="position: absolute; left: 27%; top: 245%">Для кого этот сайт?</h2>
        <p class="centre" style="position: absolute; left: 15%; top: 260%">Этот сайт используется ради выполнения<br>
            домашней работы и практики в<br> веб-программировании. Возможны
            доработки,<br> исправления. Предложения и вопросы по<br> моему сайту задавать по телефону ниже.</p>
    </section>

    <div style="position: absolute; left: 58%; top: 259.49%"><?php require('change_photo.php') ?></div>



    <section>
        <h2 class="features" id="part1" style="position: absolute; left: 20%; top: 295%">Ранние годы</h2>
        <p class="centre" style="position: absolute; left: 15%; top: 310%">С самого маленького возраста я проявлял<br>
            интерес к спорту и знаниям. Я ходил на кружок по рисованию, но,
            к счастью, душа направила меня на водный путь. Таким образом я начал заниматься в бассейне и учиться
            противостоять воде.</p>
    </section>

    <section>
        <h2 class="features" id="part2" style="position: absolute; left: 20%; top: 340%">Школьные годы</h2>
        <p class="centre" style="position: absolute; left: 15%; top: 355%">Участвовал в олимпидах, спортивных
            соревнованиях. Посещал различные секции и участвовал в сборах.
            Занимался Powerlifing, выступал на соревнованиях, занимал призовые места и даже стал чемпионом Европы и
            Мира.
        </p>
    </section>

    <section>
        <h2 class="features" id="part3" style="position: absolute; left: 20%; top: 381%">Студентечкие годы</h2>
        <p class="centre" style="position: absolute; left: 15%; top: 396%">Участвую в проектной деятельности, посещаю
            пары и стараюсь успеть сделать все вовремя. Мой девиз
            "Делай что-то всегда, и возможно что-то успеешь". Так и живем.</p>
    </section>

    <section class="advantages">
        <h2 class="features" style="position: absolute; left: 20%; top: 450%">Что выделяет меня среди конкурентов?</h2>
        <ul class="advantages-list" style="position: absolute; left: 20%; top: 480%">
            <li class="advantages-item vip">Я Глеб</li>
            <li class="advantages-item vip">Я из Дубны</li>
            <li class="advantages-item vip">Я высокий</li>
            <li class="advantages-item standard">Учусь на бюджете</li>
            <li class="advantages-item standard">Я стрессоустойчивый, раз смог пересдать 6 задолжностей</li>
            <li class="advantages-item ">Я достиг совершеннолетия, так что могу легально работать</li>
            <li class="advantages-item ">Не судим, не женат. Готов заняться вашим проектом прямо сейчас</li>
            <li class="advantages-item ">Гарантийное обслуживание в течение первых 18 лет</li>
        </ul>
    </section>

    <section>
        <blockquote>
            <p style="position: absolute; left: 90%;top:30%;">Ум ценится дорого, когда дешевеет сила.</p>
            <cite style="position: absolute; left: 90%;top:37%;">Джейсон Стэтхэм</cite>
        </blockquote>
    </section>

    <table style="position: absolute; left: 15.5%; top: 575%;">
        <tr>
            <td>&nbsp;</td>
            <td>Addison</td>
            <td>Casimer</td>
            <td>Beckham</td>
            <td>Jayden</td>
        </tr>
        <tr>
            <td>Monday</td>
            <td>0000</td>
            <td>0001</td>
            <td>0010</td>
            <td>0011</td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td>0100</td>
            <td>0101</td>
            <td>0110</td>
            <td>0111</td>
        </tr>
        <tr>
            <td>Wensday</td>
            <td>1000</td>
            <td>1001</td>
            <td>1010</td>
            <td>1011</td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td>1100</td>
            <td>1101</td>
            <td>1110</td>
            <td>1111</td>
        </tr>
        <tr>
            <td>Friday</td>
            <td>10101</td>
            <td>01010</td>
            <td>00100</td>
            <td>11011</td>
        </tr>
    </table>

    <a href="feedback.php"><button class="button_reg"
            style="position: absolute; left: 43.4%;top:672%; width: 14.25%;height: 5%;">Обр. связь</button></a>

    <a href="#begin" style="position: absolute; left: 85%;top:790%;" class="pgUp">Наверх</a>

    <div class="text_between_small" style="position: absolute; left: 35%;top:735%; width: 30%; height: 10%;">
        <ul>
            <?php for($i = 0; $i <count($array); $i++ ) {
        echo $array[$i];
      } ?>
        </ul>
    </div>

    <footer class="site-footer" style="position: absolute; left: 0%; top: 7700px">
        <div class="container">
            <p style="position: absolute; left: 25%;top:50px;">© Глеб, 2003-2022 Контактный телефон: 8-800-555-35-35</p>
            <p style="position: absolute; left: 25%;top:150px;">Сайт для моих достижений</p>
            <p style="position: absolute; left: 25%;top:250px;">С BG помог https://vk.com/andrushkass</p>
            <p style="position: absolute; left: 25%;top:350px;"><?php require('time.php') ?></p>
        </div>
    </footer>
</body>

</html>