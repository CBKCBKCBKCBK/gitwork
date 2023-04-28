<?php
echo '<body style="background-color:black;color:white">';

$str='學會PHP網頁程式設計，薪水會加倍，工作會好找';
echo str_replace('程式設計',
'<h1 style="color:aquamarine;display:inline">
<ruby>程式設計<rt>Programming</rt></rubu></h1>'
,$str);

echo "<hr>";
$str='The reason why a great man is great is that he resolves to be a great man';
echo substr($str,0,10).'...';

echo "<hr>";
$str="this,is,a,book";echo $str;echo "<br>";
$array=explode(',',$str);
echo "<pre>";print_r($array);echo "</pre>";
echo join(',',$array);

echo "<hr>";
$str="aaddw1123";echo $str;echo "<br>";
echo str_replace(
    $str,
    str_repeat('*',strlen($str)),
    $str);

echo "<hr>";

$str='今天天氣很好';
echo $str;echo "<br>";
echo strlen($str);echo "<br>"; 
echo mb_strlen($str);echo "<br>"; 


echo "<hr>";
$str='今天天氣很好';
$search='天氣';
echo $str;echo "<br>";
echo $search;echo "<br>";
echo strpos($str,$search);echo "<br>";
echo mb_strpos($str,$search);echo "<br>";


echo "<hr>";
$str='生成式人工智慧（Generative AI）風潮席捲各界，其在工業製造領域也發揮關鍵作用，一如在上週登場的「2023漢諾威工業展」，也對AI正滲透工業設計與製造有諸多討論。達梭系統大中華區副總裁Samson Khaou則表示，生成式AI不只協助針對既有產品設計優化，更可進一步重新改善設計。';
$ex=explode("，",$str);
echo "<pre>";print_r($ex);echo "</pre>";
$file="list.doc";
$file=explode('.',$file);
$sub=end($file);
echo $sub;echo "<br>";
echo join(',',$ex);

echo "<hr>";

$str='今天天氣很好';
$str2='Today is a good day';
echo $str;echo "<br>";
echo $str2;echo "<br>";
echo strlen($str);echo "<br>";
echo substr($str,9,6);echo "<br>";
echo substr($str2,4,3);echo "<br>";

$str=' 今 天 天 氣 很 好 ';
echo trim($str);echo "<br>";
echo str_replace(' ','',$str);echo "<br>";
$str='今天天氣很好';
$replace='很糟';

echo str_replace('天','日',$str);echo "<br>";
echo preg_replace('/(?=天)/','日',$str);echo "<br>";

echo "</body>";