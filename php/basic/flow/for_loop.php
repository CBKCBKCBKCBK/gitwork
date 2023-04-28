<?php
echo '<body style="background-color:black;color:#ccc">';

$starwidth = 5;      //宣告一個變數為列數

if ($starwidth < 1) {
    $starwidth = 1;
} elseif ($starwidth % 2 === 0) {
    $starwidth -= 1;
}
for ($i = 0; $i < $starwidth; $i++) {
    for ($j = 0; $j < $starwidth; $j++) {
        //  左上                                左下
        if (($i + $j) < ($starwidth - 1) / 2 || (($i - $j) > ($starwidth - 1) / 2) || ($i === $j)) {
            echo "&nbsp&nbsp";
            //右上                  右下
        } elseif (($i + $j) > (($starwidth - 2) - $i) && ($i + $j) < ($starwidth + $starwidth / 2) - 1) {
            echo "*";
        }
        // echo "*";
    }
    echo "<br>";
}
echo "<hr>";
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    //列印空格        
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp&nbsp";
    }        //列印*號        
    for ($k = 1; $k <= 2 * $i - 1; $k++) {        //列印第一行後最後一行都打*串連($i==1 || $i==5)             
        if ($i == 1) { //去掉$i==5 把中間拋空
            echo "*";
        } else {                //怎麼打空格和*號的問題                
            if ($k == 1 || $k == 2 * $i - 1) {
                echo "*";
            } else {
                echo "&nbsp&nbsp";
            }
        }
    }
    echo "<br/>";
}    //倒轉 拋空    
for ($i = $n; $i >= 0; $i--) {        //列印空格        
    for ($j = 0; $j <= $n - $i; $j++) {
        echo "&nbsp;";
    }        //列印*號        
    for ($k = 1; $k <= 2 * $i - 3; $k++) {            //怎麼打空格和*號的問題            
        if ($k == 2 * $i - 3 || $k == 1) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br/>";
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
for ($i = 0; $i < 10; $i++) {
    echo $i * 10;
    echo "<br>";
}
echo '$i=' . $i;
echo "<hr>";

echo "1,3,5,7,9......n" . "<br>";
for ($i = 1; $i < 10; $i += 2) {
    echo "<snap>" . $i . " <snap>";
}
echo "<br><br>";

echo "1,3,5,7,9......n ";
$n = 21;
$limit = ceil($n / 2);
echo "n=" . $n . "<br>";
for ($i = 1; $i <= $limit; $i++) {
    // echo "<snap>".$i." <snap>";
    echo $i * 2 - 1;
    echo ",";
}
echo "<br><br>";

echo "1,3,5,7,9......n ";
$n = 21;
echo "n=" . $n . "<br>";
for ($i = 0; $i <= $n; $i = $i += 2) {
    // echo "<snap>".$i." <snap>";
    echo $i;
    echo ",";
}
echo "<br><br>";

echo "10,20,30,40,50,60......n" . "<br>";
for ($i = 10; $i < 100; $i += 10) {
    echo "<snap>" . $i . " <snap>";
}
echo "<br>";
/**
 * 求質數
 */
$start_time = microtime(true);
echo "3,5,7,11,13,17......97 ";
$n = 97;
echo "n=" . $n . "<br>";
for ($i = 3; $i <= $n; $i++) {
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j !== 0) {
            break;
        }
    }
    echo "<snap>" . $i . " <snap>";
}
echo "<br>";
$end_time = microtime(true);
echo "程式所花時間；" . ($end_time - $start_time)*100000 . "微秒";echo "<br><br>";

echo "<br><br>";




$start_time = microtime(true);
echo "teacher 3,5,7,11,13,17......97 ";
$n = 97;
echo "n=" . $n . "<br>";
for ($i = 3; $i <= $n; $i++) {
    $check = false;
    // echo 'for ($i = 3; $i <= $n; $i++) {'
    //     .' $i='.$i.' $n='.$n.' $check='
    //     .($check?'true':'false').'<br>';
    for ($j = 2; $j < $i; $j++) {
        
        if ($i % $j == 0) {
            $check = true;
            // echo 'if ($i % $j == 0) {'
            //     .' $i='.$i.' $j='.$j.' $check='
            //     .($check?'true':'false').'<br>';
            break;
        }
        // echo 'for ($j = 2; $j < $i; $j++) {'
        //     .' $i='.$i.' $j='.$j.' $check='
        //     .($check?'true':'false').'<br>';
    }
    if ($check == false) {
        //echo "<snap>質數為" . $i . " <snap><br>";
        echo "<snap>" . $i . " <snap>";
    }
}
echo "<br>";
$end_time = microtime(true);
echo "程式所花時間；" . ($end_time - $start_time)*100000 . "微秒";echo "<br><br>";

echo "<hr>";


echo "</body>";
