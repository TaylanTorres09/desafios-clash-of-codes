// Sum of even number 2 to N

<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $N);

$sum = 0;
for($i = 2; $i <= $N; $i++) {
    if($i%2 == 0) {
        $sum += $i;
    }
}

echo $sum;
?>
