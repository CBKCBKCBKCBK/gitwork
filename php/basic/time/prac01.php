<?php
echo '<body style="background-color:black;color:white">';
date_default_timezone_set("asia/taipei");
?>
<?php
$today=strtotime("now");
// $today=strtotime(date('2023-4-30'));
$week=date("N",$today);
$gap=1-$week;
$seconds=strtotime("$gap days",$today);
// $monday=date("Y-m-d l",$seconds);
// echo $monday.'&emsp;';
for ($i=0; $i < 5; $i++) { 
    echo date("Y-m-d l",strtotime("+$i week",$seconds));
    echo "<br>";
}
?>
<?php
echo "<hr>";
$today=strtotime('now');
echo date('Y/m/d',$today);echo "<br>";
echo date('m月d日 l',$today);echo "<br>";
echo date('Y/n/j G:'.(int)date('i').':'.(int)date('s'));echo "<br>";
echo date('Y/m/d H:i:s',$today);echo "<br>";
echo '今天是西元'.date('Y年n月j日 H時i分s秒',$today);echo "<br>";
echo date("N")>=6?"是假日":"是工作日";echo "<br>";

?>

<h2>給定二個日期，計算中間間隔天數</h2>
<div>2023-04-24</div>
<div>2023-10-07</div>
<?php
$startDay=strtotime('2023-04-24');
$endDay=strtotime('2023-6-17');
$long=($endDay-$startDay)/(24*60*60);
echo "距離 ".date('Y-m-d',$endDay)." 還有$long".'天';

echo "</body>";?>
<h2>計算距離自己下一次生日還有幾天</h2>

<?php
$now=strtotime(date("Y-m-d"));
$birthday=strtotime("2024-01-15");
$days=($birthday-$now)/(24*60*60);

echo $birthday;echo "<br>";

echo "距離下一次的生日 ".date('Y-m-d',$birthday)
." 還有$days".'天';