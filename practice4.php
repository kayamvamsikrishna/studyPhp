<?php
#harshad sir number
$a=18;
$dummy=0;
$summ=0;
while ($dummy>0){
    $rem=$dummy%10;
    $dummy=$dummy/10;
    $summ=$summ+$rem;
}

if ($summ%$a==0){
    echo "True";
}
else{
    echo "False";
}
?>
