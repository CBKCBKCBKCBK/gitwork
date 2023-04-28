<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
        td{
            text-align: center;
        }
        .box99 td{
            width: 15px;
        }
    </style>
</head>

<body>
    <?php
    echo "<table class='box99'>";
    for ($i=0; $i <=9 ; $i++) {
        echo "<tr>";
        for ($j=0; $j <=9 ; $j++) { 
            echo "<td>";
            if($i===0 && $j===0){
                echo "&nbsp;";
            }elseif($i===0){
                echo $j;
            }elseif($j===0){
                echo $i;
            }elseif($i<$j){
                echo "&nbsp;";
            }else{
                echo $i*$j;
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<hr>";
    $height = 5; // 菱形高度
    $mid = ceil($height / 2); // 菱形中間行
    for ($i = 1; $i <= $height; $i++) {
        for ($j = 1; $j <= abs($mid - $i); $j++) {
            echo "&nbsp;&nbsp;"; // 輸出空格
        }
        for ($j = 1; $j <= 2 * ($height - abs($mid - $i)) - 1; $j++) {
            if ($j == 1 || $j == 2 * ($height - abs($mid - $i)) - 1) {
                echo "*"; // 輸出菱形兩端的星號
            } else {
                echo "&nbsp;&nbsp;"; // 輸出菱形中間的空格
            }
        }
        echo "<br>"; // 換行
    }
    echo "<hr>";

    //teacher
    echo "<style>table,tr,td{border:1px solid white;
    border-collapse:collapse;padding:5px}</style>";
    echo "<table>";
    for ($j=1; $j <=9; $j++) { 
        echo "<tr>";
        for ($i=1; $i <=9 ; $i++) { 
            echo "<td>";
            echo "$j x $i = ";
            echo $j*$i;
            echo "</td>";
        }
        echo "</tr>";
        // echo "<br>";
    }echo"</table>";

    echo "<hr>";
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            echo "$i x $j = ".$i*$j."&emsp;&emsp;";
        }
        echo "<br>";
    }
    echo "<hr>";
    $multiplication=array();
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            echo "$i x $j = ".$i*$j."&emsp;&emsp;";
            //array_push($array,"")
            //$multiplication[$j-1]+=''.$i.' x '.$j.' = '.$i*$j.'&emsp;';
        }
        echo "<br>";
    }
    foreach($multiplication as $value){
        echo $value.'<br>';
    }
    ?>
</body>

</html>