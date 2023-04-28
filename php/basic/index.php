<?php 
$name='mack';
$age='48';
$total=10*100;

echo '名字是：';
echo $name;echo '<br>';
echo '年齡是：';
echo $age;echo '<br>';
echo '總數是：';
echo $total;echo '<br><br>';

echo "<span style='color:blue;font-size:24px'>";
print('名字是：');
print($name);print('<br>');
print('年齡是：');
print($age);print('<br>');
print('總數是：');
print($total);print('<br>');
print("</span>");
print('<br>');print('<br>');

define("PI",3.1415);
const PIY=1122333;
echo PI;echo '<br>';
echo PIY;echo '<br>';
$name='mack';
$mack='60';
echo $mack;echo '<br>';
$name='mack';
$$name=55;
echo $mack;echo '<br>';