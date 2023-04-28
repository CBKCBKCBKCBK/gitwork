<style>
    table.c99,.c99 table,tr,td{
        border: 1px solid white;
        border-collapse: collapse;
    }
    .class99 td{
        padding: 5px;
    }
</style>
<?php
echo '<body style="background-color:black;color:white">';

echo "<h1>反轉陣列</h1>";
$a=[2,4,6,1,8];
$times=ceil(count($a)/2);
$maxIndex=count($a)-1;
for ($i=0; $i <$times; $i++) { 
    $tmp=$a[$i];
    $a[$i]=$a[$maxIndex-$i];
    $a[$maxIndex-$i]=$tmp;
}
echo "<pre>";echo 'print_r($a)= ';print_r($a);echo "</pre><br>";
$a=[2,4,6,1,8];
krsort($a);
foreach($a as $i){
    echo $i.',';
}echo "<br>";
$a=[2,4,6,1,8];
rsort($a);
foreach($a as $i){
    echo $i.',';
}echo "<br>";

echo "<hr>";
$year=2023;

$s_year=1024;
$sky=["甲","乙","丙","丁","戊","己","庚","辛","壬","癸"];
$land=["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];
$adgenary[$s_year]=$sky[0].$land[0];
//echo $year."年是".$sky[]

$skyland=[];
for($i=0;$i<60;$i++){
    $skyland[]=$sky[$i%10].$land[$i%12];
}
$year=2053;
echo "給定西元年".$year;
$index=($year-$s_year)%60;
echo "<br>天干地支年為".$skyland[$index]."年";

echo "<hr>";
echo "<h1>leapyear 閏年</h1>";

$startyear=2023;
$endyear = 2523;
$leapyear=[];
for ($i = $startyear; $i <= $endyear; $i++) {
    $flag = false;
    if (
        $i % 4 == 0     && 
        $i % 100 !== 0  || 
        $i % 400 == 0
    ) {
        $flag = true;
        $leapyear[]= $i;
    }
}
$t=2350;
if(in_array($t,$leapyear)){
    echo $t."是閏年";
}else{
    echo $t."是平年";
    foreach($leapyear as $year){
        if($year-$t<21||$year+$t>21){
            // echo
        }
    }
}echo "<br><br>";
foreach($leapyear as $year){
    echo $year."年為閏年<br>";
}

/**
 * {
        $flag = true;
        echo $i . "年為閏年&emsp;";
    }
    if ($i % 20 == 0) echo "<br>";
 */

echo "<hr>";
echo "<h1>威力彩選號</h1>";
// for ($i=0; $i < 6; $i++) { 
//     echo rand(1,38)."<br>";
// }
$lotto=[];
while (count($lotto) <= 5) {
    $number=rand(1,38);
    echo "$number ,";
    if(!(in_array($number,$lotto)))$lotto[]=$number;
}echo "<br>";
sort($lotto);
foreach($lotto as $num)echo $num.',';
echo "<br>".rand(1,8);

echo "<hr>";

$nine=[];
for ($i=1; $i <=9; $i++) { 
    for ($j=1; $j <=9; $j++) { 
        $nine[]="$i x $j = ".$i*$j;
    }
}
// echo "<pre>";
// print_r($nine);
// echo "</pre>";
echo "<table class='c99'>";
foreach($nine as $k=> $str){
    if($k%9==0)echo "<tr>";
    echo "<td>$str</td>";
    if($k%9==8)echo "</tr>";
}
echo "</table>";

echo "</body>";