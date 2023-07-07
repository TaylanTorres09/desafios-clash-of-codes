// You have to compute the sum of all given prime numbers.
// Note that only prime numbers must be added up!

<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $N);
$s = 0;
for ($i = 0; $i < $N; $i++)
{
    $p = 0;
    fscanf(STDIN, "%d", $a);
    for($j = 1; $j<=$a; $j++){
        if($a % $j == 0) {
            $p++;
        }
    }
    if($p==2) {
        $s+=$a;
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo $s;
?>
