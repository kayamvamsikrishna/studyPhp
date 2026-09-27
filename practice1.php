<?php
$a=10;
$dummy=$a;
$summ=0;
for($i=0;$i<$dummy;$i++){
    $summ=$i+$summ;
}
if($summ==$a){
    echo $summ;
}
echo $a;
?>