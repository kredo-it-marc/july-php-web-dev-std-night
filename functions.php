<?php
    //INTERNAL / BUILT-IN Functions - > functions provided by php
    $str = "i am in lowercase.";
    $str2 = "I AM IN UPPERCASE.";

    echo strtoupper($str); //strtoupper() converts the string to uppercase. $str is what we call the argument. A value we send to the function to be processed
    echo "<br>";
    echo strtolower($str2); //strtolower() converts the string to lowercase
    echo "<br>";
    echo isset($str); //isset() is used to check if the variable contains a value. It returns a boolean value: TRUE or FALSE.
    echo "<hr>";

    //User-defined function
    // function call -> runs the code in the function; you can call the function plenty of times
    displayHello();
    displayHello();
    displayHello();

    // Function declaration
    // no arguments, no return
    function displayHello(){
        echo "<h1>Hello World!</h1>";
    }

    //1 argument, no return
    function greetUser($name){
        echo "<p>Hello, $name!</p>";
    }

    greetUser("Tetsuto"); //function Call
    greetUser("Carl"); //function Call
    greetUser("John"); //function Call
    greetUser("Sakura"); //function Call

    $sum = add(8, 11);
    echo "<p>$sum</p>";

    $num1 = 10;
    $num2 = 72;

    $sum2 = add($num1, $num2);
    echo "<p>$sum2</p>";
    
    //2 arguments, no return
    function add($x, $y)
    {
        return ($x + $y);
    }

?>