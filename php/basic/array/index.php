<?php
echo '<body style="background-color:black;color:white">';



echo "<hr>";

$d=["A",9,'001'=>"C",21,'name','name'=>'mack'];
$seA=serialize($d);
echo $seA;echo "<p>&nbsp;</p>";
$ueA=unserialize($seA);
echo "<pre>";echo 'unserialize($seA)= ';print_r($ueA);echo "</pre><br>";
$seA=serialize($d);
$s=implode('.',$d);
echo $s;echo "<br>";
$array=explode('.',$s);
echo "<pre>";echo 'explode('.',$s)= ';print_r($array);echo "</pre><br>";

echo "<hr>";

$a=[12,9,30,21,77,3];
$d=["A",9,"C",21,77,3];
$merge=array_merge($a,$d);
echo "<pre>";echo 'array_merge($a,$d)= ';print_r($d);echo "</pre><br>";

echo "<hr>";
$fill=["A",9,"C",21,77,3];
$fill=array_fill(0,25,"hi");
echo "<pre>";echo 'array_fill(0,25,"hi")= ';print_r($fill);echo "</pre><br>";
$d=["A",9,"C",21,77,3];
echo 'array_search("C",$d)= '.array_search("C",$d);echo "<br>";
$keys=array_keys($d);
echo 'array_keys($d)= ';print_r($keys);echo "<br>";
$keys=array_keys($d);
echo 'array_keys($d)= ';print_r($keys);echo "<br>";

echo "<hr>";

$dd='AAA';
$check=is_array($dd);
$d=[12,9,30,21,77,3];
echo "<pre>";echo 'print_r($d)= ';print_r($d);echo "</pre><br>";
$newD=sort($d);
//foreach($d as $a){echo $a."&emsp;";}unset($a);echo "<br>";
echo "<pre>";echo 'print_r($newD)= ';print_r($newD);echo "</pre><br>";
echo "<pre>";echo 'print_r($d)= ';print_r($d);echo "</pre><br>";
$d=[12,9,30,21,77,3];rsort($d);
echo "<pre>";echo 'print_r($d)= ';print_r($d);echo "</pre><br>";
$d=["A",9,"C",21,77,3];sort($d);
echo "<pre>";echo 'print_r($d)= ';print_r($d);echo "</pre><br>";
$d=["A",9,"C",21,77,3];rsort($d);
echo "<pre>";echo 'print_r($d)= ';print_r($d);echo "</pre><br>";

echo "<hr>";

$a[1] = "A";
$a['001'] = "B";
$a['name'] = "John";

echo gettype($check);echo "<br>";
if($check){
    echo "是陣列";
}else{
    echo "不是陣列";
}echo "<br>";
if(in_array('B',$a)){
    echo "在陣列中";
}else{
    echo "不在陣列中";
}echo "<br>";


echo "<hr>";

$a = [
    '數學' => [
        [
            '姓名' => '小明',
            '成績' => 98
        ],
        [
            '姓名' => '小美',
            '成績' => 22
        ],
        [
            '姓名' => '阿明',
            '成績' => 60
        ]
    ],
    '國文' => [
        [
            '姓名' => '小明',
            '成績' => 58
        ],
        [
            '姓名' => '小美',
            '成績' => 73
        ],
        [
            '姓名' => '阿明',
            '成績' => 90
        ]
    ]
];
echo "<pre>" . 'print_r($a)= ';
print_r($a);
echo "</pre>";

echo "<hr>";
$b[100] = "100";
$b[] = "B";
$b[] = "C";
$b[] = "D";
$b[] = "E";
$b[] = "F";
$b['total'] = 4;
$b[] = "G";
echo "<pre>" . 'print_r($b)= ';
print_r($b);
echo "</pre>" . 'foreach($b as $a)= ';
foreach ($b as $a) {
    echo $a . '<br>';
}
echo "<pre>" . 'print_r($a)= ';
print_r($a);
echo "</pre>";

echo "<hr>";
$a[1] = "A";
$a['001'] = "B";
$a['name'] = "John";
echo $a[1];
echo "<br>";
echo $a['001'];
echo "<br>";
echo $a['name'];
echo "<br>";
$a = 'cdef';
echo '$a= ';
print_r($a);
echo "<br>";
echo '$a[0]= ';
echo $a[0];
echo "<br>";
echo '$a[1]= ';
echo $a[1];
echo "<br>";
echo '$a[2]= ';
echo $a[2];
echo "<br>";
echo '$a[3]= ';
echo $a[3];
echo "<br>";


echo "<hr>";
$a[1] = "A";
$b[] = "B";

$c = ["A", "B", "C"];

echo $a[1];
echo "<br>";
echo $b[0];
echo "<br>";
echo $c[2];
echo "<br>";
echo $a[0];
echo "<br>";
print_r($a);

echo "</body>";
