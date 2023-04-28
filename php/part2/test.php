<body style="background-color:black;color:white">



<?php

$today=strtotime('now');
echo date('Y-m-d',$today);echo "<br>";
$today=date('Y-m-d',$today);
echo date('Y-m-d',strtotime($today.' 1 day 1 month'));

?>



</body>