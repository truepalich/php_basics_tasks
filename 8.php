<?php

$age = 'sss';

if ($age >= 18 && $age <= 59 && !is_array($age)) {
    echo 'Вам еще работать и работать';
} elseif ($age > 59 && !is_array($age)) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 0 && $age <= 17 && is_numeric($age)) {
    echo 'Вам еще рано работать';
} elseif ($age < 0 || !is_numeric($age)) {
    echo 'Неизвестный возраст';
}
