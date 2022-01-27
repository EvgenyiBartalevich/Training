<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZ_03</title>
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
    </style>
</head>
<body>
    
    <?php echo '<p class = "p"><strong>Home Work_03</strong></p>';?>
    
    <?php 
// Task 1
echo '<hr/>';
echo 'Задание 1 <br/>';

function returnNamber($a){
pow($a, 3); //$a ** $b;
return pow($a, 3);

}
echo returnNamber(3); 

echo '<hr/>'; 
echo 'Задание 2 <br/>';

function returnSum($x, $y){
    return $x + $y;
}
echo returnSum(2,8);

echo '<hr/>'; 
echo 'Задание 3 <br/>';

function returnDay($d){
    
if($d <= 7 && $d >= 1){
    
        switch($d){
    case 1: 
        echo 'Понедельник : ';
    break;
    case 2: 
        echo 'Вторник : ';
    break;
    case 3: 
        echo 'Среда : ';
    break;
    case 4: 
        echo 'Четверг : ';
    break;
    case 5: 
        echo 'Пятница : ';
    break;
    case 6: 
        echo 'Суббота : ';
    break;
    case 7: 
        echo 'Воскресение : ';
    break;
        }

        }else {
            echo 'Нет такого дня недели : ';
}
return $d;
}
echo returnDay(5);

echo '<hr/>'; 
echo 'Задание 4 <br/>';

function checkNamber($t){
if($t < 0){
    return true;
}else return false;
}
var_dump(checkNamber(-15));
// echo checkNamber(-8);

echo '<hr/>'; 
echo 'Задание 5 <br/>';


function getDigitsSum($n){
    $n = strval($n); //strval — Возвращает строковое значение переменной
    $sum = 0;
for($i = 0; $i < strlen($n); $i++){
    
  $sum += (int)$n[$i];
}
    return $sum;
}
echo getDigitsSum(777);

    
    ?>
</body>
</html>