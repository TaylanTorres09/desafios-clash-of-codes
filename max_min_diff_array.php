// Given an array array of integers of size n.
// Our mission consists on printing the absolute value of the Max and Min difference between 2 successives indexes (i and i+1).

<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $n);
$inputs = explode(" ", fgets(STDIN));
$elements = array();
for ($i = 0; $i < $n; $i++)
{
    $element = intval($inputs[$i]);
    array_push($elements, $element);
}
$dif_min = abs($elements[1] - $elements[0]);
$dif_max = abs($elements[1] - $elements[0]);
for($i = 0; $i < $n-1; $i++) {
    if(abs($elements[$i+1] - $elements[$i]) > $dif_max) {
        $dif_max = abs($elements[$i+1] - $elements[$i]);
    } else if(abs($elements[$i+1] - $elements[$i]) < $dif_min) {
        $dif_min = abs($elements[$i+1] - $elements[$i]);
    }
}
echo "$dif_min $dif_max";
?>
