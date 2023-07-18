<h1>While Loop</h1>
<?php
    $num = 1;

    while( $num<5 )
    {
        //loop body or while-block
        echo "<p>$num: is less than 5.</p>";
        $num++;
    }
?>

<hr>

<h1>Do-While Loop</h1>
<?php
    $num = 1;
    
    do{
        //loop body / do-block
        echo "<p>$num: is less than 5</p>";
        $num++;
    }while($num<5);
    /**
     * WHILE LOOP VS DO-WHILE LOOP
     * 
     * WHILE LOOP
     * 1. evaluate the condition
     * 2. run the loop body/while-block
     * 
     * DO-WHILE LOOP
     * 1. run the loop body/do-block
     * 2. evaluate the codition
     * 
     * if the condition evaluates to FALSE the first time, the while loop will not run the loop body.Not even once. BUT in your do-while loop, the loop body runs at least once.
     */
?>
<hr>

<h1>For Loop</h1>
<?php
    //$num = 1 => counter
    //$num<5 => condition
    //$num++ => update statement

    for($num = 1; $num<5; $num++)
    {
        //loop body or for-block
        echo "<p>$num: is less than 5.</p>";
    }

    /**
     * ORDER of code that runs in the for loop
     * 1. Counter -> runs only once.
     * 2. condition 
     * 3. loop body ->if the condition evaluates to TRUE
     * 4. update statement;
     * 5. repeat the process starting #2 until the condition evaluates to false.
     */

?>
<hr>
<h1>Nested Loops</h1>
<?php
    for($i = 1; $i <=5; $i++)
    {
        for($j=1; $j<=5; $j++)
        {
            echo "*";
        }
        echo "<br>";
    }

    for($counter1 = 1; $counter1 <= 7; $counter1++)
    {
        for($counter2 =1; $counter2 <= $counter1; $counter2++)
        {
            echo "*";
        }
        echo "<br>";
    }

    for($counter1= 1; $counter1 <= 5; $counter1++)
    {
        for($counter2=1; $counter2<=$counter1; $counter2++){
            echo $counter2;
        }

        echo "<br>";
    }
?>