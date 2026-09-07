Hint:
try
 ↓
Run risky code
 ↓
throw exception (if something goes wrong)
 ↓
catch
 ↓
Handle the problem
 ↓
finally (optional)


try contains code that might cause an exception.
throw creates/raises an exception.
catch handles the exception.
finally runs whether an exception occurs or


BASIC :

<?php

try {
    $age = -5;

    if ($age < 0) {
        throw new Exception("Age cannot be negative.");
    }

    echo "Age: " . $age;

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>



FINALLY: 
<?php

try {
    $number = 10;

    if ($number == 10) {
        throw new Exception("Number cannot be 10.");
    }

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();

} finally {
    echo "<br>Program finished.";
}
?>




MULTIPLE CATCH BLOCKS :

<?php

try {
    throw new InvalidArgumentException("Invalid value.");

} catch (InvalidArgumentException $e) {
    echo "Invalid argument: " . $e->getMessage();

} catch (Exception $e) {
    echo "General error: " . $e->getMessage();
}
?>


CUSTOM EXCEPTION :

<?php

class AgeException extends Exception
{
}

try {
    $age = 15;

    if ($age < 18) {
        throw new AgeException("You must be at least 18.");
    }

    echo "Access granted.";

} catch (AgeException $e) {
    echo "Access denied: " . $e->getMessage();
}
?>