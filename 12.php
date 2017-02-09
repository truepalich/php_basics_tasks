<?php

$day = 8;

switch ($day) {
    case ($day >= 1 && $day <= 5):
        echo 'Это рабочий день';
        break;
    case 6:
        echo 'Это выходной день';
        break;
    case 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
        break;
}

