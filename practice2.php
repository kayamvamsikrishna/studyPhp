<?php
$prime = (int)readline("Enter: ");
//$prime = (float)readline("Enter: ");
$kvk = true;

for ($i = 2; $i <= $prime / 2; $i++) {
    if ($prime % $i == 0) {
        $kvk = false;
        break;
    }
}

if ($kvk) {
    echo "True";
} else {
    echo "False";
}
?>
