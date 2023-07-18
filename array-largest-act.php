<?php
    $num = [32, 98.07, 11, 27, 45.66, 101.002, 0.05, 10.09];

    $largest = NULL; //NULL =>means empty or no value;

    foreach($num as $x)
    {
        if($x > $largest) //check if the value from the array is bigger than the current value of $largest
        {
            $largest = $x; //if the condition is TRUE; update $largest with a new value
        }
    }

    echo "<p>The largest value from the array is $largest</p>";
?>