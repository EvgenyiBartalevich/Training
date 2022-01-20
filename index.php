<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP.Lesson 01</title>
</head>
<body>
    <?php echo 'Hello World!'?>
    <?php //phpinfo();?>

<hr>

<?php 

// Task 1
echo 'Task 1';

$a = 10;
//var_dump($a);
$b = 2;
?>

<p><?php echo $a + $b; ?></p>
<p><?php echo $a - $b; ?></p>
<p><?php echo $a * $b; ?></p>
<p><?php echo $a / $b; ?></p>

<hr>
<?php 
// Task 2
echo 'Task 2';
$x = 2;
$y = 6;
$z = 9;

?>
<p><?php echo ($x + 1) * 4 - 2 * ($z - 2 * $x**2 + $y**2); ?></p>

<hr>
<?php 

// Task 3
echo 'Task 3';

$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
?>
<p><?php echo $result; ?></p>

<hr>
<?php 

// Task 4
echo 'Task 4';

$text1 = 'Привет,';
//var_dump($text1);
$text2 = 'Мир!';
echo '<p>' .$text1. ' ' .$text2. '</p>';
?>

<hr>
<?php 

// Task 5
echo 'Task 5';

$name = 'Евгений';
$text = 'Привет';

echo '<p>' .$text. ', ' .$name. '!</p>';
echo "<p>{$name}, {$text}!</p>";

?>

<hr>
<?php 

// Task 6
echo 'Task 6';

$s = 'Сумма';
$num = 12345;
$sum = 0;
 do {
     $sum += $num % 10;
 } while ($num = (int)($num/10)); // цикл..google to help

 echo '<p>' .$s. ': ' .$sum. '!</p>';
?>

<hr>
<?php 

// Task 7
echo 'Task 7' .'</br>';

 echo 60 * 60 .'</br>';
 echo 60 * 60 * 24 .'</br>';
 echo 60 * 60 * 24 * 30 .'</br>';
 echo 60 * 60 * 24* 365 .'</br>';
 echo 60 * 60 * 24* 365 * 22 .'</br>';
?>

<hr/>
<?php 

// Task 8
echo 'Task 8'.'</br>';

 $time = '2:';
 $time .= '22:';
 $time .= '22';

 echo $time;

?>

<hr/>
<?php 

// Task 9
echo 'Task 9'.'</br>';

//$g = 5;
//$g = $g + 3; // 8
//$g += 3; 
//echo $g;

$var = 1 ;
$var = $var + 12;
$var = $var - 14;
$var = $var * 5;
$var = $var / 7;
$var = $var + 1;
$var = $var - 1;

echo $var . '</br>';

$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;
echo '</br>';
echo $var;

?>

<hr/>
<?php 

// Task 10
echo 'Task 10'.'</br>';

define('SURNAME', 'Bartalevich');
echo SURNAME .'</br>';
//var_dump(SURNAME);
$name = 'Evgeniy';
$name2 = 'Aleksandrovich';
$age = 32;

$const_surname = SURNAME;

// var_dump(defined($const_surname));

echo "Меня зовут {$const_surname} {$name} {$name2}.".'</br>';
echo "Мне {$age} года.";

?>

</body>
</html>