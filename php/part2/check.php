<body style="background-color:black;color:white">



<?php

$acc='admin';
$pw='1234';

$_POST['acc'];
$_POST['pw'];
if(!empty($_POST)){
    if($_POST['acc']==$acc && $_POST['pw']==$pw){
        echo "帳密正確，登入成功";
    }else{
        echo "帳密錯誤，登入失敗";
        header('location:login.php?error=帳密錯誤，登入失敗');
    }
    
}

?>
<br><br><br>
<a href="./login.php">返回登入頁</a>
</body>