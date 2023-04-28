<?php
echo '<body style="background-color:black;color:white">';
?>
<h2>月曆</h2>
<?php
// echo date('2023-4-23');
echo 'echo date("t",strtotime("2024-2-28"));<br>';
echo date('t', strtotime('2024-2-28')) . "<hr>";
// $today = strtotime("now");
$today=strtotime("2023-5-27");
$month = date("n", $today);   // 不補零月份 用來計算
$days = date("t", $today);
$firstDate = date("Y-n-1", $today);
$finalDate = date("Y-n-t", $today);
$firstDateWeek = date('w', strtotime($firstDate));
$finalDateWeek = date('w', strtotime($finalDate));
$firstWeekSpace = $firstDateWeek - 1;

echo "月：" . $month;
echo "<br>";
echo "天數：" . $days;
echo "<br>";
echo "第一天：" . $firstDate;
echo "<br>";
echo "最後一天：" . $finalDate;
echo "<br>";
echo "第一天星期：" . $firstDateWeek;
echo "<br>";
echo "最後一天星期：" . $finalDateWeek;
echo "<br>";

$weeks = ceil(($days + $firstDateWeek) / 7);
echo "週數：" . $weeks;
echo "<br>";
/**
 * 
 */
?>
<style>
    .calendar {
        border-collapse: collapse;
        text-align: center;
    }

    .calendar td {
        border: 1px solid gray;
        padding: 5px 10px;
    }
</style>
<?php

$start_time = microtime(true);
echo "<table class=calendar>";
echo '<tr>';
echo '<td>日</td>';
echo '<td>一</td>';
echo '<td>二</td>';
echo '<td>三</td>';
echo '<td>四</td>';
echo '<td>五</td>';
echo '<td>六</td>';
echo '</tr>';

$day = 1;
for ($i = 0; $i < $weeks; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 7; $j++) {
        echo "<td>";
        if (($i == 0 && $j < $firstDateWeek) ||
            ($weeks - 1 == $i && $j > $finalDateWeek)) {
            echo "&nbsp;";
        } else {
            echo $day++;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
$end_time = microtime(true);
echo "程式所花時間；" . ($end_time - $start_time)*100000 . "微秒";echo "<br><br>";

echo "teacher<br>";
$start_time = microtime(true);
echo "<table class=calendar>";
echo '<tr>';
echo '<td>日</td>';
echo '<td>一</td>';
echo '<td>二</td>';
echo '<td>三</td>';
echo '<td>四</td>';
echo '<td>五</td>';
echo '<td>六</td>';
echo '</tr>';


for ($i = 0; $i < $weeks; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 7; $j++) {
        echo "<td>";

        if(($i==0 && $j<$firstDateWeek) || 
        ($i==$weeks-1 && $j>$finalDateWeek)){
            echo "&nbsp;";
        }else{
            echo $j+7*$i-$firstWeekSpace;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
$end_time = microtime(true);
echo "程式所花時間；" . ($end_time - $start_time)*100000 . "微秒";echo "<br><br>";



echo "</body>";
