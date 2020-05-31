<?php

require('const.php');
$user_name = "Igor";
if (1 == 1) {
    echo 'hi<br>';
}

 showSomething();

$name = "Усман";
$age = "45";

echo "Меня зовут:" . " " . $name . "." . "<br>";
echo "Мне 45 лет" . "." . "<br>";
echo '"!|/\'"\\' . "<br>";
echo "\"!|/'\"\\" . "<br>";

var_dump(PEINT);
echo '<br>';
echo 'Рисунков, выполненных красками на школьной выставке:' . ' '. PEINT . '.';
echo '<br>';

//Задание #3

$age = 45;
if ($age > 18 && $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age > 1 && $age <= 17) {
    echo 'Вам ещё рано работать';
} else {
    echo 'Неизвестный возраст';
}

echo '<br>';
echo '<br>';

//Задание #4
$day = 5;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день';
        break;
    case 6:
    case 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
}

echo '<br>';
echo '<br>';

//Задание #5
$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015"
];

$toyota = [
    "model" => "5",
    "speed" => 110,
    "doors" => 4,
    "year" => "2016"
];

$opel = [
    "model" => "3",
    "speed" => 100,
    "doors" => 5,
    "year" => "2017"
];

$cars = ['bmv' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

echo '<br>';
echo '<br>';

//Задание #6

echo "\n<table border='5' cellpadding='5'>\n";
$tr = 1;
while ($tr <= 10) {
    echo "\t<tr>\n";
    $td = 1;
    while ($td <= 10) {
        $result  = $tr * $td;
        if ($td % 2 == 0 && $tr % 2 == 0) {
            echo "\t\t<td>($result)</td>\n";
        } elseif ($td % 2 !== 0 && $tr % 2 !== 0 && $tr != 1 && $td != 1) {
            echo "\t\t<td>[$result]</td>\n";
        } else {
            echo "\t\t<td>$result</td>\n";
        }

        $td++;
    }
    echo "\t</tr>\n";
    $tr++;
}
echo "</table>\n\n";
