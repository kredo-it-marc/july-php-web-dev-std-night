<?php
    echo "Hello World";
    echo "<h1>I am a headline</h1>";
    echo "Mary", "Tim";
    echo "<p>My name is "."John "."Smith.</p>";

    $first_name = "John";
    $last_name = "Smith";
    $age = 21;

    echo "<p>My name is $first_name $last_name. I am $age years old.</p>";

    $str = "I am a string.";
    $int = 55;
    $float_or_double = 72.09;
    $bool = TRUE;

    var_dump($str);
    var_dump($int);
    var_dump($float_or_double);
    var_dump($bool);

    $num1 = 11;
    $num2 =19.3;
    $num3 = 77;
    $num4 = 35;

    $sum = $num1 + $num4; //addition
    $difference = $num2 - $num3; //subtraction
    $product = $num1 * $num2; //multiplication
    $quotient = $num3 / $num4; //division
    $remainder = $num3 % $num4; //modulo => returns the remainder

    echo "<p>The sum of $num1 and $num4 is $sum</p>";
    echo "<p>The difference of $num2 and $num3 is $difference</p>";
    echo "<p>The product of $num1 and $num2 is $product</p>";
    echo "<p>The quotient of $num3 divided by $num4 is $quotient</p>";
    echo "<p>The remainder of $num3 divided by $num4 is $remainder</p>";
?>