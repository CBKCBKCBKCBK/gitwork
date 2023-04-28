<?php
echo '<body style="background-color:black;color:white">';

$students = [
    'judy' => [
        '國文' => 95,
        '英文' => 64,
        '數學' => 70,
        '地理' => 90,
        '歷史' => 84
    ], 'amo' => [
        '國文' => 88,
        '英文' => 78,
        '數學' => 54,
        '地理' => 81,
        '歷史' => 71
    ], 'john' => [
        '國文' => 45,
        '英文' => 60,
        '數學' => 68,
        '地理' => 70,
        '歷史' => 62
    ], 'peter' => [
        '國文' => 59,
        '英文' => 32,
        '數學' => 77,
        '地理' => 54,
        '歷史' => 42
    ], 'hebe' => [
        '國文' => 71,
        '英文' => 62,
        '數學' => 80,
        '地理' => 62,
        '歷史' => 64
    ]
];
$class=['國文','英文','數學','地理','歷史'];
?>
<style>
    table.students tr,td {
        border: 1px solid white;
        border-collapse: collapse;
        text-align: center;
    }.students td{
        padding: 5px;

    }
</style>
<table class="students"><?php
                echo "<tr><td>&nbsp;</td>";
                foreach ($class as $member) {
                    echo "<td>$member</td>";
                }
                echo "</tr>";
                foreach ($students as $keys => $member) {
                    echo "<tr>";
                    echo "<td>$keys</td>";
                    foreach ($member as $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                }
                ?>
</table>
<?php
echo "<hr>";
echo "<pre>";
echo 'array= ';
print_r($students);
echo "</pre><br>";


echo "</body>";

