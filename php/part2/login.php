<body style="background-color:black;color:white">
<?php
// $acc='admin';
// $pw='1234';
// if(!empty($_POST)){
//     if($_POST['acc']==$acc && $_POST['pw']==$pw){
//         echo "帳密正確，登入成功";
//     }else{
//         echo "帳密錯誤，登入失敗";
//     }
    
// }
if(!empty($_GET)){
    echo '<span style="color:red">';
    echo $_GET['error'];
    echo '</span>';
}
?>
    <h1>登入頁面</h1>
    <!-- <form action="?" method="post"> -->
    <form action="check.php" method="post">
        <div>
            <label for="acc">帳號：</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div>
            <label for="pw">密碼：</label>
            <input type="password" name="pw" id="pw">
        </div>
        <div>
            <input type="submit" value="登入">
        </div>

    </form>

    <?php



    ?>
</body>