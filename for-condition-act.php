<?php
    for($counter = 1; $counter <=10; $counter++)
    {
        if($counter%2 == 1) //check if counter is ODD
        {
            echo $counter."-";
        }
        elseif($counter % 2 == 0 && $counter != 10) //check if the counter is EVEN
        {
            echo $counter.".";
        }
        else
        {
            echo $counter;
        }
    }
?>