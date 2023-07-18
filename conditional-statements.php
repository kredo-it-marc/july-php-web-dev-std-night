<?php
    $age = 16;

    if( $age < 18 )
    {
        // if-block => the code here only runs if and only if the condition evaluates to TRUE.
        echo "<p>You are a minor.</p>";
    }

    $num1 = 100;
    $num2 = 25;
    $num3 = 300;

    if($num1 > $num2 && $num1>$num3) //check if the $num1 has the largest value
    {
        echo "<p>The largest value is $num1</p>";
    }

    if($num2 > $num1 && $num2> $num3) //check if the $num2 has the largest value
    {
        echo "<p>The largest value is $num2</p>";
    }

    if($num3>$num1 && $num3>$num2) //check if the $num3 has the largest value
    {
        echo "<p>The largest value is $num3</p>";
    }

    //if-else
    $age = 17;

    if( $age < 18)
    {
        //if-block=> runs the code if the condition evaluates to TRUE
        echo "<p>You are a minor.</p>";
    }
    else
    {
        // else-block => runs the code if the condition evaluates to FALSE
        echo "<p>You are of legal age.</p>";
    }

    /**
     * pH Scale
     * 0-6 = acidic
     * 7 = neutral
     * 8-14 = Basic
     */

     $ph = 20;

    if(0 <= $ph && $ph <= 6) //substance is acidic
    {
        echo "<p>$ph is acidic.</p>";
    }
    elseif($ph == 7) //substance is neutral
    {
        echo "<p>$ph is neutral.</p>";
    }
    elseif(8<=$ph && $ph<=14) //substance is alkaline
    {
        echo "<p>$ph is alkaline.</p>";
    }
    else //error message
    {
        echo "<p>$ph is INVALID.</p>";
    }

?>