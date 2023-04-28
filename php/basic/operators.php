<?php
echo '<body style="background-color:black;color:white">';
$check=true;
echo $check;
// 沒有東西=null
// true =1
echo "<br>";
$price=125;
echo $price;echo "<br>";    //125
$price++;
echo $price;echo "<br>";    //126
$price--;
echo $price;echo "<br>";    //125
echo $price++;echo "<br>";  //125
echo $price;echo "<br>";    //126
echo --$price;echo "<br>";  //125
echo "<hr>";
$num1=25;
$num2=10;
echo '$num1='.$num1."<br>";
echo '$num2='.$num2;echo "<br>";
echo " + => ";echo $num1+$num2;echo "<br>";
echo " - => ";echo $num1-$num2;echo "<br>";
echo " * => ";echo $num1*$num2;echo "<br>";
echo " / => ";echo $num1/$num2;echo "<br>";
echo " % => ";echo $num1%$num2;echo "<br>";
echo "<hr>";
$name='劉勤永';
[$name=>'劉勤永'];
echo "<hr>";
$score=70;
$level=($score>=60?"及格":"不及格");
echo '成績'.$score."分，".$level;echo "<br>";
echo "<hr>";
$a=10;$b=50;
echo '原本&emsp;&emsp;a='.$a.',b='.$b.'<br>';
$temp=$a;
$a=$b;
$b=$temp;
echo '交換後&emsp;a='.$a.',b='.$b.'<br>';
echo "<hr>";
$starwidth=9;      //宣告一個變數為列數
for($i=0 ; $i<$starwidth ; $i++){
    for ($j=0; $j < $starwidth; $j++) { 
        echo "*";
    }
    echo "<br>";
}
/**
 * 04 f
 * 05 t
 * 13 t
*/

echo "</body>";