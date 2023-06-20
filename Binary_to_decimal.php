<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $N);
$num = '';
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d", $x);
    $num = $num.strval($x);
}

echo bindec($num);

?>
