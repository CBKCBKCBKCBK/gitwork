<style>
    .calendar>div {
        border: 1px solid #ccc;
        width: calc(100% / 7);
        box-sizing: border-box;
        margin-left: -1px;
        margin-top: -1px;

    }

    .calendar {
        display: flex;
        flex-wrap: wrap;
        width: 50%;
        margin-left: 1px;
        margin-top: 1px;
    }
</style>

<body style="background-color:black;color:white">



    <?php
    // echo date('2023-4-23');
    // echo 'echo date("t",strtotime("2024-2-28"));<br>';
    // echo date('t', strtotime('2024-2-28')) . "<hr>";
    $today = date('Y-m-d',strtotime("now -1 day"));
    echo $today;echo "<br>";
    // $today=strtotime("2023-5-27");
    $month = $_GET['m'] ?? date("n");    //取得當前的月份
    $year=$_GET['y']??date('Y');
    $firstDateTime = strtotime(date("$year-$month-1"));    //取得當前月份第一天
    $days = date("t", $firstDateTime);     //取得當前月份的總天數
    $finalDateTime = strtotime(date("Y-n-t", $firstDateTime));    //取得當前月份最後一天
    $firstDateWeek = date("w", $firstDateTime); //取得當前月份第一天的星期
    $finalDateWeek = date("w", $finalDateTime); //取得當前月份最後一天的星期
    $weeks = ceil(($days + $firstDateWeek) / 7);  //計算當前月份的天數會佔幾周
    $firstWeekSpace = $firstDateWeek - 1;       //計算當前月份第一周的空白日(或前一個月份佔幾天)
    $days = [];
    if($month==1){
        $prevYear=$year-1;
        $prevMonth=12;
    }else{
        $prevYear=$year;
        $prevMonth = $month - 1;
    }
    if($month==12){
        $nextYear=$year+1;
        $nextMonth=1;
    }else{
        $nextYear=$year;
        $nextMonth = $month + 1;
    }
    
    

    ?>
    <div>
        <a href="calendar.php?y=<?=$prevYear?>&m=<?= $prevMonth; ?>"><?= $prevMonth; ?>月</a>

        <span><?= $month; ?>月</span>

        <a href="calendar.php?y=<?=$nextYear?>&m=<?= $nextMonth; ?>"><?= $nextMonth; ?>月</a>
    </div>
    <?php

    echo "<br>";

    //使用迴圈來畫出當前月的周數
    for ($i = 0; $i < $weeks; $i++) {
        //使用迴圈來畫出當周的天數
        for ($j = 0; $j < 7; $j++) {
            //判斷當周是否為第一周或最後一周
            if (($i == 0 && $j < $firstDateWeek) || (($i == $weeks - 1) && $j > $finalDateWeek)) {
                $days[] = '&nbsp';
            } else {
                $days[] = $j + 7 * $i - $firstWeekSpace;
            }
        }
    }
    ?>
    </style>
    <div class='calendar'>
        <div>日</div>
        <div>一</div>
        <div>二</div>
        <div>三</div>
        <div>四</div>
        <div>五</div>
        <div>六</div>
        <?php
        for ($i = 0; $i < count($days); $i++) {
            $today=date("d");
            if($today==$days[$i]){
                echo "<div class='today'> {$days[$i]} </div>";
            }else{
                echo "<div> {$days[$i]} </div>";
            }
        }
        ?>
        <div>
            <a href="?year=<?=date('Y');?>$month=
            <??>"></a>
        </div>


</body>