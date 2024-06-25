<?php
// Get the values from the $_GET superglobal
$time = $_GET['time'];
$scores = $_GET['scores'];

// Open the text file in append mode
$file = fopen("scores.txt", "a");

// Write the values to the file
fwrite($file, "Time: $time, Scores: $scores\n");

// Close the file
fclose($file);
?>