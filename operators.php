<h1>Arithmetic Operators</h1>
<?php
//  arithmetic operators
$a = 100;
$b = 73;
$c = 11.09;
$d = 44;

$sum = $a + $d;
$difference = $b - $c;
$quotient = $a / $c;
$product = $b * $d;
$remainder = $a % $b;

echo "<p>The sum of $a and $d is $sum</p>";
echo "<p>The difference of $b and $c is $difference</p>";
echo "<p>The quotient of $a divided by $c is $quotient</p>";
echo "<p>The product of $b and $d is $product</p>";
echo "<p>The remainder of $a divided by $b is $remainder</p>";
?>
<hr>
<h1>Assignment Operators</h1>
<?php
//assignment operators
$num1 = 123;
$num2 = 77.011;
$num3 = 3.09;
$num4 = 53;
$num5 = 89;
$num6 = 110;
$num7 = 203;
$num8 = 101.2;
$num9 = 32.11;
$num10 = 307.6;

echo "<h2>Initial Value</h2>";
echo "<p>Initial Value num1 = $num1</p>";
echo "<p>Initial Value num2 = $num2</p>";
echo "<p>Initial Value num3 = $num3</p>";
echo "<p>Initial Value num4 = $num4</p>";
echo "<p>Initial Value num5 = $num5</p>";
echo "<p>Initial Value num6 = $num6</p>";
echo "<p>Initial Value num7 = $num7</p>";
echo "<p>Initial Value num8 = $num8</p>";
echo "<p>Initial Value num9 = $num9</p>";
echo "<p>Initial Value num10 = $num10</p>";


$num1 += $num10; //$num1 = $num1 + $num10;
$num2 -= $num9; //$num2 = $num2 - $num9;
$num3 /= $num8; //$num3 = $num3 / $num8;
$num4 *= $num7; // $num4 = $num4 * $num7;
$num5 %= $num6; //$num5 = %num5 % $num6;

echo "<h2>Final Value</h2>";
echo "<p>Final Value num1 = $num1</p>";
echo "<p>Final Value num2 = $num2</p>";
echo "<p>Final Value num3 = $num3</p>";
echo "<p>Final Value num4 = $num4</p>";
echo "<p>Final Value num5 = $num5</p>";
echo "<p>Final Value num6 = $num6</p>";
echo "<p>Final Value num7 = $num7</p>";
echo "<p>Final Value num8 = $num8</p>";
echo "<p>Final Value num9 = $num9</p>";
echo "<p>Final Value num10 = $num10</p>";
?>
<hr>
<h1>Comparison Operators</h1>
<?php
// Comparison Operators
$num1 = 123;
$num2 = 77.011;
$num3 = 3.09;
$num4 = 53;
$num5 = 89;
$num6 = 110;
$num7 = 203;
$num8 = 101.2;
$num9 = 32.11;
$num10 = 307.6;

$equal = ($num1 == $num2); //equal to 
$identical = ($num2 === $num3);// identical
$not1 = ($num3 != $num4); //not equal
$not2 = ($num4 <> $num5); //not equal
$greater_than = ($num5 > $num6); //greater than
$less_than = ($num6 < $num7); //less than
$greater_than_or_equal = ($num7 >= $num8); //greater than or equal to
$less_than_or_equal = ($num8 <= $num9); //less than or equal to

echo "<p>$num1 == $num2 is $equal</p>";
echo "<p>$num2 === $num3 is $identical</p>";
echo "<p>$num3 != $num4 is $not1</p>";
echo "<p>$num4 <> $num5 is $not2</p>";
echo "<p>$num5 > $num6 is $greater_than</p>";
echo "<p>$num6 < $num7 is $less_than</p>";
echo "<p>$num7 >= $num8 is $greater_than_or_equal</p>";
echo "<p>$num8 <= $num9 is $less_than_or_equal</p>";

//INCREMENT / DECREMENT
?>
<hr>
<h1>Increment Operator</h1>
<?php
$x = 200;
echo "<p>Initial Value: $x</p>";
echo "<p>Preincrement:".++$x."</p>"; //add 1 to variable before displaying the value
echo "<p>Postincrement:".$x++."</p>"; //display the current value first, then it will update the value
echo "<p>Final Value: $x</p>";
?>
<hr>
<h1>Decrement Operators</h1>
<?php
$y = 77;
echo "<p>Initial Value: $y</p>";
echo "<p>Predecrement:".--$y."</p>";
echo "<p>Postdecrement:".$y--."</p>";
echo "<p>Final Value: $y</p>";
?>
<hr>
<h1>Logical Operators</h1>
<?php
//logical operators

$and = (7 <= 9) && (80 != 23); //TRUE
$or = (40 <> 50) || (1.09 > 1.9); //TRUE
$not =  !(100 < 37.100); //TRUE

echo "<p>(7 <= 9) && (80 != 23) is $and</p>";
echo "<p>(40 <> 50) || (1.09 > 1.9) is $or</p>";
echo "<p>!(100 < 37.100) is $or</p>";
?>