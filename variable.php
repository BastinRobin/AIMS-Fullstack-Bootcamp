<?php


// assign the variables 
$a = "milk";
$b = "water";
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo "--------------";

// create a new empty variable
// shift value from a to c
$c = $a;

// shift value from b to a
$a = $b;

// shift value from c to b
$b = $c;
echo "<br>";

echo $a;
echo "<br>";

echo $b;

echo "<br>";

echo $a."<br>", $b."<br>", $c."<br>";


// print a
// print b
// print c


?>