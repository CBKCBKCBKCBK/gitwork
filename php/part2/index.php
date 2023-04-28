<?php
echo '<body style="background-color:black;color:white">';
?>

<h1>表單傳值</h1>
<h3>GET</h3>
<form action="target.php" method="get">
    <input type="text" name="addr" id="name">
    <input type="submit" value="送出">
</form>
<h3>POST</h3>
<form action="target.php" method="post">
    <input type="text" name="name" id="name">
    <input type="submit" value="送出">
</form>
<h3>POST及檔案上傳</h3>
<form action="target.php" method="post" enctype="multipart/form-data">
    <input type="text" name="type">
    <input type="file" name="img" id="img">
    <input type="submit" value="送出">
</form>
<h3>BMI計算</h3>
<form action="target.php" method="post">
    身高：<input type="number" name="height" id="height"><br>
    體重：<input type="number" name="weight" id="weight"><br>
    <input type="submit" value="計算BMI">
</form>

<?php




echo "</body>";