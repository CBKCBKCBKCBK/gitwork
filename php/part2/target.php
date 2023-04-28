
<?php
echo '<body style="background-color:black;color:white">';

$a='';
echo isset($a)?'真':'假';

echo "<hr>";
?>

<h2>目標頁面</h2>

<?php
// error_reporting(0);
if(!empty( $_GET['addr']    ))echo "GET是：".$_GET['addr']."<br>";
if(!empty( $_POST['name']   ))echo "POST是：".$_POST['name']."<br>";
if(!empty( $_POST['img']    ))echo "POST檔案是："."<img src=".$_POST['img'].">"."<br>";
if(!empty( $_POST['height'] ) 
|| !empty( $_POST['weight'] ))
{
    echo "身高是：{$_POST['height']}公分
&nbsp;體重是：{$_POST['weight']}公斤&nbsp;BMI是："
.round($_POST['weight']/ pow($_POST['height']/100,2) ,3);
}

// error_reporting(-1);

echo "</body>";