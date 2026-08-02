
//In PHP, there are 4 common ways to create functions:

//User-defined Function :
<?php
function greet() {
    echo "Hello!";
    }
greet();
?>

//Function with Parameters :
<?php
function add($a, $b) {
    return $a + $b;
    }
echo add(10, 20);
?>

//Anonymous Function :
<?php
$greet = function() {
    echo "Hello!";
   };
$greet();
?>

//Arrow Function :
<?php
$add = fn($a, $b) => $a + $b;
echo $add(10, 20);
?>
