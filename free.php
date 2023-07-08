// When I asked all my friends if they are free (aka available) or not, they responded thus.

// Please summarize:
// ‣ How many of my friends are free numFree ?
// ‣ What percentage of my friends are free percentFree ?

<?php

$responses = stream_get_line(STDIN, 2000 + 1, "\n");

$free = substr_count($responses, "free");
$not = substr_count($responses, 'not');

$percent = round((($free - $not) / $free), 2) * 100;

$free = $free - $not;

echo "$free $percent%";

?>
