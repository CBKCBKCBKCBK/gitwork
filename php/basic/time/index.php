<h2>時間與日期</h2>
<?php
echo '<body style="background-color:black;color:white">';

date_default_timezone_set('Asia/Taipei');
echo date('Y-m-d');echo "<br>";
echo date('y-M-d-D');echo "<br>";
echo date('Y-m-d h:I:S');echo "<br>";
echo date('Y-m-d H:i:s.u');echo "<br>";

// date_default_timezone_set('Asia/Tokyo');
// echo date('Y-m-d H:i:s');echo "<br>";

echo strtotime("now");echo "<br>";
$yesterday= strtotime("now")-(60*60*24);
echo date("Y-m-d H:i:s",$yesterday);echo "<br>";

$today=strtotime(date("Y-m-d"));
echo "現在的時間為：$today".'秒';echo "<br>";
echo '可讀的日期字串：'.date('Y-m-d H:i:s',$today);echo "<br>";
$tomorrow=strtotime("+1 day",$today);
echo '明天：'.date("Y-m-d H:i:s",$tomorrow);echo "<br>";
$yesterday=strtotime("-1 day",$today);
echo '昨天：'.date("Y-m-d H:i:s",$yesterday);echo "<br>";
$nextweek=strtotime("+1 week",$today);
echo '下週：'.date("Y-m-d H:i:s",$nextweek);echo "<br>";
$lastweek=strtotime("-1 week",$today);
echo '上週：'.date("Y-m-d H:i:s",$lastweek);echo "<br>";
echo strtotime("2023-07-01");echo "<br>";


echo "</body>";