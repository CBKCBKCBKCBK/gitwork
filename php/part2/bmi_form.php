<?php
echo '<body style="background-color:black;color:white">';
?>

<h1>BMI計算</h1>
<form action="result.php" method="get">
    <div>
        <label for="height">身高(公分)</label>
        <input type="number" name="height" id="height">
    </div>
    <div>
        <label for="weight">體重(公斤)</label>
        <input type="number" name="weight" id="weight">
    </div>
    <div>
        <input type="submit" value="計算BMI">
    </div>

</form>

<?php




echo "</body>";
