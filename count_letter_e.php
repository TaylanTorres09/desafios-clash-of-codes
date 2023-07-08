// Goal
// Declan: Who the hell are you?

// Walt: You know. You all know exactly who I am. Say my name.

// Declan: What? I don't have a damn clue who the hell you are.
// Walt: Yeah, you do. I'm the cook. I'm the man who killed Gus Fring.

// Declan: Bullshit. Cartel got Fring.

// Walt: Are you sure? That's right. Now. Say my name.

// Declan: You're ............ ?
// Input
// Heisenberg
// Output
// 4
// Constraints
// Tip: output the count of letters 'e' case independently plus one

<?php

$x = stream_get_line(STDIN, 10000 + 1, "\n");
$x = strtolower($x);
$e = substr_count($x, 'e') + 1;

echo $e;
?>
