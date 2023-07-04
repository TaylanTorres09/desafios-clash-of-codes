// The program:
// Given a string L (of length N), print out every right rotation of L until it reverts to the original string.

// INPUT:
// Line 1: A string L

// OUTPUT:
// Line 1: L
// Line 2: L rotated by one character to the right
// Line 3: L rotated by two characters to the right
// ...
// Line N: L rotated by N - 1 characters to the right
// Line N + 1: L

// CONSTRAINTS:
// 2 ≤ N ≤ 50

<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$l = stream_get_line(STDIN, 80 + 1, "\n");

$resp = $l;
for($i = 0; $i <= strlen($l); $i++) {
    echo "$resp\n";
    $strpos = $resp[strlen($l) - 1];
    $resp = substr_replace($resp, $strpos, 0, 0);
    $resp = rtrim($resp, $strpos);
}

?>
