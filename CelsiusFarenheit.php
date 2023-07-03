// You must output the degree in Celsius if degree is odd otherwise in Fahrenheit,
// don't forget to round the converted degree.

// Fahrenheit to Celsius
// df = degree in Fahrenheit
// degree in Celsius = (df-32) * (5/9)

// Celsius to Fahrenheit
// dc = degree in Celsius
// degree in Fahrenheit = (9/5 * dc) + 32

<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $d);

if($d % 2 == 0) {
    $f = $d * (9/5) + 32;
    echo round($f);
} else {
    $c = ($d - 32) *(5/9);
    echo round($c);
}

?>
