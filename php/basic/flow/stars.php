<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<?php
echo "<h3>菱形t2ss</h3>";

$n = 9;    // 更改此值
/**
 * i=0 j=0 1 2 4 5 6
 * i=1 j=0 1 5 6
 * i=2 j=0 6
 * i=3 j=
 * i=4 j=0 6
 * i=5 j=0 1 5 6
 * i=6 j=0 1 2 4 5 6
 * 3.3 5.6 7.9 9.12 11.15
 */
$tmp = 0;
$n = $n % 2 == 0 ? $n + 1 : $n;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if (
            $j < floor($n / 2) - $i || $j > $i + floor($n / 2)
            || $j < $i - floor($n / 2) || $j > 12 - $i
        ) {
            echo "&nbsp;";
        } else {
            echo "*";
        }
    }
    echo "<br>";
}
echo "<hr>";
echo "<h3>菱形挖空</h3>";

$n = 18;    // 更改此值

$n = $n % 2 == 0 ? $n + 1 : $n;
$tmp = 0;
$center = ceil($n / 2);

for ($i = 0; $i < $n; $i++) {
    $tmp = $i < ceil($n / 2) ? $i : $n - 1 - $i;
    for ($j = 0; $j < (ceil($n / 2) - 1 - $tmp); $j++) {
        echo '&nbsp;';
    }
    for ($j = 0; $j < ($tmp * 2 + 1); $j++) {
        if ($j == $center - $tmp || $j == $center = $i) {
            echo "*";
        }
    }
    echo "<br>";
}


echo "<hr>";

echo "<h3>矩形中間畫叉</h3>";

$n = 15;
/**
 * i=1 j=1 5:7-2:i+1
 * i=2 j=2 4:7-3:i+1
 * i=3 j=3 3:7-4:i+1
 */
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($i == 0 || $i == $n - 1) {
            echo "*";
        } elseif (
            $j == 0 || $j == $n - 1
            || $i == $j || $j == $n - ($i + 1)
        ) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


echo "<hr>";
echo "<h3>矩形</h3>";

$n = 13;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($i == 0 || $i == $n - 1) {
            echo "*";
        } elseif ($j == 0 || $j == $n - 1) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


echo "<hr>";
echo "<h3>菱形t2s</h3>";

$n = 10;    // 更改此值

$tmp = 0;
$n = $n % 2 == 0 ? $n + 1 : $n;
for ($i = 0; $i < 9; $i++) {
    $tmp = $i < 5 ? $i : 8 - $i;
    for ($j = 0; $j < 9; $j++) {
        if ($i == 0 && $j < 5 && $j > 5) {
            echo "&nbsp;";
        } else {
            echo "*";
        }
    }
    echo "<br>";
}
echo "<br>";
echo "<h3>菱形t2</h3>";

$n = 10;    // 更改此值

$tmp = 0;
$n = $n % 2 == 0 ? $n + 1 : $n;
for ($i = 0; $i < $n; $i++) {
    // if($i<5){$tmp=$i1;}else{$tmp=8-$i;}
    $tmp = $i < ceil($n / 2) ? $i : $n - 1 - $i;
    for ($j = 0; $j < (ceil($n / 2) - 1 - $tmp); $j++) {
        echo '&nbsp;';
    }
    for ($j = 0; $j < ($tmp * 2 + 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
echo "<h3>菱形t1</h3>";
for ($i = 0; $i < 5; $i++) {
    /**
     * j=0 i=3 2 1 0
     * j=1 i=2 1 0
     */
    for ($j = 0; $j < (4 - $i); $j++) {
        echo '&nbsp;';
    }
    for ($j = 0; $j < ($i * 2 + 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < $i + 1; $j++) {
        echo '&nbsp;';
    }
    for ($j = 0; $j < ((3 - $i) * 2 + 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
echo "<h3>菱形</h3>";
for ($i = 0; $i < 9; $i++) {
    for ($j = 0; $j < (4 - $i) || ($i - 4) > $j; $j++) {
        echo '&nbsp;';
    }
    for ($j = 0; $j < ($i * 2 + 1) && $j < 17 - $i * 2; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";
echo "<h3>正三角形</h3>";
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < (4 - $i); $j++) {
        echo '&nbsp;';
    }
    for ($j = 0; $j < ($i * 2 + 1); $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 9; $j++) {
        if ($i * 2 + 1 < $j) {
            echo '&nbsp;';
        } else {
            echo "*";
        }
    }
    echo "<br>";
}
/**
 * i=0  j=1234 6789
 * i=1  j=123   789
 */

echo "<hr>";
echo "<h3>倒直角三角形</h3>";
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5 - $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";
echo "<h3>直角三角形</h3>";
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < $i + 1; $j++) {
        echo "*";
    }
    echo "<br>";
}
