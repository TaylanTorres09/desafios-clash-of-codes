// Simon the firefighter has to rescue a family from a burning building. The family is located on an upper floor, but unfortunately the fire has already spread and the stairs are not accessible anymore.
// Build a ladder for Simon so he can reach the family and rescue them.

// For every floor you have to print 1 ladder segment. 1 segment looks like this:

// #  #
// ####
// #  #

// Two segments look like this:

// #  #
// ####
// #  #
// ####
// #  #

<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $floor);
$resp = array();
for($i = 1; $i<=$floor*2 + 1; $i++) {
    if($i % 2 == 0) {
        array_push($resp, '####');
    } else {
        array_push($resp, '#  #');
    }
}

foreach($resp as $ch => $val) {
    echo "$val\n";
}
?>
