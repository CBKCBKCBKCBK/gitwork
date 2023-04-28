<?php
echo '<body style="background-color:black;color:white">';


$score = 60;

$level = null;
if ($score >= 90 && $score <= 100) {
    $level = 'A';
    echo "成績=" . $score . "<br>恭喜及格了~~";
} elseif ($score >= 80) {
    $level = 'B';
    echo "成績=" . $score . "<br>恭喜及格了~~";
} elseif ($score >= 70) {
    $level = 'C';
    echo "成績=" . $score . "<br>恭喜及格了~~";
} elseif ($score >= 60) {
    $level = 'D';
    echo "成績=" . $score . "<br>恭喜及格了~~";
} elseif ($score < 60 && $score >= 0) {
    $level = 'E';
    echo "成績=" . $score . "<br>請再接再厲~~";
} else {
    echo "成績輸入錯誤";
}
echo "<hr>";
if (!is_null($level)) {
    echo "您的學業等級是：" . $level . "<br>";
    switch ($level) {
        case "A":
            echo "表現優良，請繼續保持";
            break;
        case "B":
            echo "值得肯定，還有進步空間";
            break;
        case "C":
            echo "需要更多加練習";
            break;
        case "D":
            echo "需要加強基本功";
            break;
        default:
            echo "是否無心學業";
    }
} else {
}
echo "<hr>";
echo "test";



echo "</body>";
