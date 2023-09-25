<?php
function factorial($num) {
    // Base case: if the number is 0 or 1, return 1
    if ($num == 0 || $num == 1) {
        return 1;
    }
    // Recursive case: multiply the number with the factorial of (number - 1)
    else {
        return $num * factorial($num - 1);
    }
}

// Call the factorial function
$result = factorial(5);
echo "The factorial of 5 is: " . $result;