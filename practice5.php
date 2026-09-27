<?php
#Armstrong number
$a=153;
$dummy=0;
$summ=0;
$p=strlen($a);
while ($dummy>0){
    $rem=$dummy%10;
    $dummy=$dummy/10;
    $summ=$summ+pow($rem,$p);
}

if ($summ==$a){
    echo "True";
}
else{
    echo "True";
}
?>
