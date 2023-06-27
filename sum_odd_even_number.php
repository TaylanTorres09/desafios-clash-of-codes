// Depending on type, Sum up all of the odd or even numbers from 1 to value
// Input
// Line 1 : A String type, either odd or even, for the type of number to sum
// Line 2 : A number value , for the maximum value to sum up
// Output
// Line 1: The sum of all the type integers less than or equal to value

<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%s", $type);
fscanf(STDIN, "%d", $value);
$sum = 0;
for($i=1; $i<=$value; $i++) {
    if($type == 'even') {
        if($i % 2 == 0) {
            $sum += $i;
        }
    } else {
        if($i % 2 != 0) {
            $sum += $i;
        }

    }
}

echo $sum;

?>
