<?php
$s = date('s'); // определяем текущую секунду
$os = $s % 2; // вычисляем остаток от деления

if( $os === 0 ) // если в переменной $os хранится ноль
$name='img/GLEB.png'; // сохраняем имя первого файла
else // иначе
$name='img/GLEB2.png'; // сохраняем имя второго файла

echo '<img src="'.$name.'" alt="">'; // выводим сформированный HTML‐код
?>