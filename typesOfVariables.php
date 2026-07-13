
<?php 
//global variable
$a=10;
$b=20;
function add(){//we cannot redeclare the function
    global $a,$b;
    $c=$a+$b;
    return $c;
}
echo add();
echo "<br>";

?>




<?php 
//static variable,... A static variable keeps its value after the function finishes.
function ad(){
    static $a,$b;
    $a++;
    $b++;
    return $a. " ". $b;//. means seperator
}
echo ad();
echo "<br>";
echo ad();
echo "<br>";
?>


<?php 
//local variable,... created and used inside the function
function a(){
    $a=10;
    $b=20;
    return $a. " ". $b;
}
echo a();
echo "<br>";
//if we access the variables out side the function then it showes error
?>



<?php 
//Superglobals are predefined variables
function b(){
    if  ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['x']))
    {
        echo $_POST['x'];
    }
    
}
echo b();

/*    we can access Superglobals any where inside the php code  

$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV        */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vamsi</title>
</head>
<body>
<form method='POST'>
    <label for="username">username</label>
    <br>
    <input name='x' type="text" >
    <br>
    <button>submit</button>
    <br>
</form>
</body>
</html>