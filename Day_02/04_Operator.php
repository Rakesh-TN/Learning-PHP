<?php
echo '<h1>Arithmetic Operators</h1>';

//Identity
$a = "10";
echo '<br>' . $a . ' ' . gettype($a);
$a = +"10"; // Adding + is help to convert string to integer
echo '<br>' . $a . ' ' . gettype($a);

//Negation
$a = '40';
echo '<br> A Value :' . $a;
echo '<br> A Value :' . -$a; // the - symbal is help display the value in Negative value.

// Add, Sub, Multi, Div, Modulo and Exponentiation 
$a = 150;
$b = 5;
echo '<br> Total : ' . $a + $b;
echo '<br> Sub : ' . $a - $b;
echo '<br> Multi : ' . $a * $b;
echo '<br> Div : ' . $a / $b;
echo '<br> Mod : ' . $a % $b;
$base = 2; //2*2*2*2*2
$power = 5;
echo '<br> Expo: ' . $base ** $power;

echo '<h1>Comparison Operators</h1>';

//Equal 

?>