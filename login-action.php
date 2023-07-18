<?php
    /**
     * isset() - is a function. it checks if the variable has a value or not
     * $_GET -> if you get the value from the url, use $_GET. it also pertains to the method we used in the form
     * isset( $_GET["btn_submit"] ) is the condition; it will evaluate to either TRUE or FALSE
     * if the condition is TRUE, it runs the code inside the if-block
     */

     //method="GET"
   if( isset( $_GET["btn_submit"] ) ) //check if the submit button is clicked
   {
        //if-block
        //INPUT
        $username = $_GET["username"];
        $password = $_GET["password"];

        //OUTPUT
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
   } 

   //method="Post"

   if( isset($_POST["btn_submit"]) )
   {
        //INPUT
        $username = $_POST["username"];
        $password = $_POST["password"];

        //OUTPUT
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
   }
?>