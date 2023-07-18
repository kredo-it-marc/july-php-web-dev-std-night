<?php
    //Declaring an Array. Method 1
    $fruits = ["Apple", "Banana", "Orange"];

    //Declaring an Array. Method 2 - array()
    $fruits = array("Apple","Banana", "Orange");

    //Assigning values to individual index
    // $array_name[key] = vallue;
    $fruits[0] = "Apple";
    $fruits[1] = "Banana";
    $fruits[2] = "Orange";

    //displaying values of the Array
    // echo $array_name[key/index];
    echo $fruits[0],"<br>"; //Apple
    echo $fruits[1],"<br>"; //Banana
    echo $fruits[2],"<br>"; //Orange

    //display array structure
    print_r($fruits);

    //count how many elements/values there are in the array
    echo "<p>No. of elements/values: ".count($fruits)."</p>"; //3

    //FOREACH LOOP
    // foreach( $array_name as $var)
    // {
            //add your code here
    // }

    echo "<ul>";
    foreach($fruits as $x)
    {
        //loop body / foreach-block
        echo "<li>$x</li>";
    }
    echo "</ul>";

   //Associative array - uses named keys
   //creating an associative array - method 1
   $book = ["title"=>"The adventures of Tom Sawyer", "author"=>"Mark Twain", "price" => 10]; 

   //method 2
   $countries = array("jp"=>"Japan", "sg"=>"Singapore", "th"=>"Thailand");

   //Assigning values to individual keys
   $person["name"] = "Nikko";
   $person["age"] = 25;
   $person["address"] = "Cebu Province";

   //displaying individual values from the array
   echo $person["name"],"<br>";
   echo $person["age"],"<br>";
   echo $person["address"],"<br>";

   //foreach loop

   foreach($book as $key => $value)
   {
        echo "<p>$key : $value</p>";
   }

   //2D associative array => an array within an array /  nested array
   $market = [
        "round" => ["fruit1"=>"Orange","fruit2"=>"Grapes"],
        "yellow" => ["fruit3"=>"Banana","fruit4"=>"Mango"]
   ];

   //displaying the individual values from the 2d Associative Array
    //echo $array_name[sub_array][key];
    echo $market["round"]["fruit1"],"<br>"; //Orange
    echo $market["round"]["fruit2"],"<br>"; //Grapes
    echo $market["yellow"]["fruit3"],"<br>"; //Banana
    echo $market["yellow"]["fruit4"],"<br>"; //Mango

    //displaying the sub-array using print_r()
    print_r($market["round"]);
    print_r($market["yellow"]);

    foreach($market as $key => $value)
    {
        echo "<h1>$key</h1>";
        
        foreach($value as $key2 => $fruit)
        {
            echo "<p>$fruit</p>";
        }
    }

    $jap_regions = [
        "Hokkaido" => ["Hokkaido" => "Sapporo"],
        "Chubu" => ["Ishikawa" => "Kanazawa", "Shizuoka" => "Fuji", "Toyama" => "Toyama", "Aichi" => "Nagoya"],
        "Chugoku" => ["Yamaguchi" => "Shimonoseki", "Tottori" => "Tottori"]
    ];
?>