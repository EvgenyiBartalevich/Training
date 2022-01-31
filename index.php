<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Work_04</title>
    <style>
*{
    margin: 0;
    padding: 0;
}
.p{
    background-color: #aaa;
    color: #000;
    font-family: cursive;
    font-size: 40px;
    font-weight: bold;
    text-align: center;
}
/*.task14{
    background-color: #000;
}*/
    </style>
</head>
<body class="task14">
    <?php echo '<p class = "p"><strong>Home Work_04</strong></p>';?>

    <?php
// Task 1
    echo '<b>Задание 1</b> <br/>';

$string = 'london is the capital of great britain <br/>';
echo 'Было : '. $string; 
/*$string = strtoupper($string); Делает всю строку в верхнем регистре.
echo $string;*/
$string = ucwords($string); // Делает заглавные буквы в верхнем регистре.
echo 'Стало : '. $string;

echo '<hr/>';

// Task 2
echo '<b>Задание 2</b> <br/>';
$string1 = 'html <b>css</b> <h4>php</h4> <br/>';
echo 'Теги еще здесь : ' . $string1;

echo 'Удаляем теги : ' . strip_tags($string1); //Удаляет теги, 2-ой параметр - тег, который должен остаться.

echo '<pre>';
print_r(explode(' ', $string1));
echo '<pre/>';

echo '<hr/>';

// Task 3
echo '<b>Задание 3</b> <br/>';
$string2 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, vitae! </br>';
echo 'Строка : ' . $string2;
$stringshuff = str_shuffle($string2); // Перемешивает строку в случайном порядке.

echo 'Перемешиваем : ' . $stringshuff . '<br/>';

echo '<hr/>';

// Task 4
echo '<b>Задание 4</b> <br/>';
echo time(). '<br/>';

$timestamp = strtotime('01.01.2022');
echo date('t-F', $timestamp);

echo '<pre>';
print_r(getdate());
echo '</pre>';

echo '<hr/>';

// Task 5
echo '<b>Задание 5</b> <br/>';

echo '2025-12-31 в формате : ' . date('Y-m-d') . '<br/>';
echo '31.12.2025 в формате : '. date('d.m.Y'). '<br/>';
echo '31.12.13 в формате : '. date('d.m.y'). '<br/>';
echo '12:59:59 в формате : '. date('H:i:s'). '<br/>';
echo 'timestamp : '. date('d.m.Y', mktime(0, 0, 0, 1, 1, 1970));

echo '<hr/>';

// Task 6
echo '<b>Задание 6</b> <br/>';

//date('Y-m-d', mktime(0, 0, 0, 12, 31, 2025)). '<br/>';
$date = '2025-12-31'. '<br/>';
echo 'Дата по заданию : ' . $date; // не работает с датой по заданию???
echo 'Прибавить 2 дня : '. date('Y-m-d', strtotime('+2 days', strtotime($date))). '<br/>';
echo 'Прибавить 1 месяц : '.date('Y-m-d', strtotime('+1 month', strtotime($date))). '<br/>';
echo 'Прибавить 3 дня : '.date('Y-m-d', strtotime('+3 day', strtotime($date))). '<br/>';
echo 'Прибавить 1 год : '.date('Y-m-d', strtotime('+1 year', strtotime($date))). '<br/>';
echo 'Вычесть 3 дня : '.date('Y-m-d', strtotime('-3 day', strtotime($date))). '<br/>';

echo '<hr/>';

// Task 7
echo '<b>Задание 7</b> <br/>';

$str = '1a2b3c4b5d6e7f8g9h0';
echo 'Удалить цифры из строки : ' . $str . '<br/>';

$strnum = preg_replace('/\d/', '', $str);// \d тоже, что и [0-9]

echo 'Цифры из строки '. $str . ' удалены : ' . $strnum;

echo '<hr/>';

// Task 8
echo '<b>Задание 8</b> <br/>';

echo 'Минимальное число : ' . min(4, -2, 5, 19, -130, 0, 10). '<br/>';
echo 'Максимальное число : ' . max(4, -2, 5, 19, -130, 0, 10);

echo '<hr/>';

// Task 9
echo '<b>Задание 9</b> <br/>';
echo 'Рандомное число от 1 до 100 : ' .  rand(1, 100); 

echo '<hr/>';

// Task 10
echo '<b>Задание 10</b> <br/>';
$arrayweek = [
    0 => 'Воскресение', 
    1 => 'Понедельник', 
    2 => 'Вторник', 
    3 => 'Среда', 
    4 => 'Четверг', 
    5 => 'Пятница', 
    6 => 'Суббота'];
print_r($arrayweek). '<br/>';
echo 'Текущий день недели : '. $arrayweek[0] . '.';

echo '<hr/>';


// Task 11
echo '<b>Задание 11</b> <br/>';

$array = [[7, -8, 2], [11, 4], [7]];
echo '<pre>' . '<br/>';
print_r($arr);
echo '</pre>' . '<br/>';

$arrsum = 0;
for($i = 0; $i < count($array);$i++ ){
    for($k = 0; $k < count($array[$i]);$k++ ){
        $arrsum += $array[$i][$k];
    }
}

echo 'Сумма массива ' . $array . ' равна ' . $arrsum . '.';

echo '<hr/>';

// Task 14
echo '<b>Задание 14</b> <br/>';

$w = rand(0, 100);
$h = rand(0, 100);
for ($i = 1; $i <= 30; $i++){
    echo "<div style = \"width: 50px; height: 50px; padding: $h; top:$w ; border: 5px solid ; color: red;\"></div>";
    echo $w . " " . $i . " <br/>";
}
    echo '<hr/>';

?>
</body>
</html>