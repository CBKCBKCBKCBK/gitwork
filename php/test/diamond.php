<?php
echo '<body style="background-color:black;color:white">';

$starwidth = 5;      //宣告一個變數為列數

if($starwidth<1){
    $starwidth=1;
}elseif($starwidth%2===0){
    $starwidth-=1;
}
for ($i = 0; $i < $starwidth; $i++) {
    for ($j = 0; $j < $starwidth; $j++) {
        //  左上                                左下
        if (($i + $j) < ($starwidth-1)/2 || (($i-$j)>($starwidth-1)/2)) {
            echo "&nbsp&nbsp";
                    //右上                  右下
        } elseif (($i + $j) > (($starwidth-2)-$i) && ($i + $j) < ($starwidth+$starwidth/2)-1) {
            echo "*";
        }
        // echo "*";
    }
    echo "<br>";
}


echo "<hr>";
$starwidth = 5;      //宣告一個變數為列數

if($starwidth<1){
    $starwidth=1;
}elseif($starwidth%2===0){
    $starwidth-=1;
}
for ($i = 0; $i < $starwidth; $i++) {
    for ($j = 0; $j < $starwidth; $j++) {
        //  左上                                左下
        if (($i + $j) < ($starwidth-1)/2 || (($i-$j)>($starwidth-1)/2)) {
            echo "&nbsp&nbsp";
                    //右上                  右下
        } elseif (($i + $j) > (($starwidth-2)-$i) && ($i + $j) < ($starwidth+$starwidth/2)-1) {
            echo "*";
        }
        // echo "*";
    }
    echo "<br>";
}
/**
 * 11   5   5   9   16
 * 9    4   4   7   13
 * 7    3   3   5   10
 * 5                7
 * 3                4
 * 
 * 3    4       4=3+1
 * 5    7   3   7=5+2
 * 7    10  3   10=7+3
 * 9   13  3    13=9+4
 * 11   16  3   16=11+5
 * 13   19  3
 */
echo "<hr>";


echo "</body>";