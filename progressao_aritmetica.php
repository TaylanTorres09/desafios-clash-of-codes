// You have to find the n-th term of arithmetic progression.
// A is the first term of the arithmetic progression.
// D is the common difference of the arithmetic progression.
// 'N' stands for the term number

// Line 1 A is a positive integer.
// Line 2 D is a positive integer.
// Line 3 N is a positive integer and stand for term number.
// Output
// Output the n-th term of arithmetic progression

<?php

fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $d);
fscanf(STDIN, "%d", $n);

$an =  $a + ($n-1)*$d;

echo $an;
?>
