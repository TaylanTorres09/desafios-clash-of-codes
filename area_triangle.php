// You are given three integers representing the lengths sides of a triangle: a, b, and c. If the three form a right triangle, 
<!-- print the area of the triangle with side lengths a, b, and c. Otherwise, print Invalid. -->
// Input
// Line 1: Three integers, a, b, and c.
// Output
// A single line containing the area of the triangle, if a, b, and c form a Pythagorean triple, and Invalid otherwise.
// Constraints
// 0<a<b<c<1000


<?php
fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $b);
fscanf(STDIN, "%d", $c);
$h = ($a*$a + $b*$b) ** (1/2);
if($h == $c) {
    $area = $a*$b / 2;
    echo $area;
} else {
    echo 'Invalid';
}
?>
