<?php
//perfectNumber
$a = 6;
$summ = 0;

for ($i = 1; $i <= $a / 2; $i++) {
    if ($a % $i == 0) {
        $summ += $i;
    }
}

if ($summ == $a) {
    echo "True";
} else {
    echo "False";
}
?>
