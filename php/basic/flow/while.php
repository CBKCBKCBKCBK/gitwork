<?php
echo '<body style="background-color:black;color:white">';

$i = 0;
while ($i < 10) {
    echo $i * 10;
    echo "<br>";
    $i++;
}
echo '$i=' . $i;

echo "<hr>";

$i = 0;
do {
    echo $i * 10;
    echo "<br>";
    $i++;
} while ($i < 10);
echo '$i=' . $i;

echo "<hr>";

echo "3,5,7,11,13,17......97 ";
$n = 97;
echo "n=" . $n . "<br>";
$i = 3;
while ($i <= $n) {
    $check = false;
    $j = 2;
    while ($j < $i) {
        break;
    }
    $i++;
}

echo "<hr>";
// leapyear 閏年
$year = 2200;
for ($i = 1; $i <= $year; $i++) {
    $leapyear = false;
    if (
        $i % 4 == 0     && 
        $i % 100 !== 0  || 
        $i % 400 == 0
    ) {
        $leapyear = true;
        echo $i . "年為閏年&emsp;";
    }
    if ($i % 20 == 0) echo "<br>";
}

echo "<hr>";



echo "</body>";
