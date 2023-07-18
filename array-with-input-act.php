<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Activity</title>
</head>
<body>
    <form action="" method="post">
        <label for="no-of-countries">How many countries have you been to?</label>
        <input type="number" name="no_of_countries" id="no-of-countries" required>
        <input type="submit" value="Submit" name="btn_submit">
    </form>

    <form action="" method="post">
        <?php
            if( isset($_POST["btn_submit"]) ) 
            {
                //INPUT
                $no_of_countries = $_POST["no_of_countries"];

                echo "<hr>";
                echo "<p>Enter the name of the countries here:</p>";

                for($i=1; $i<=$no_of_countries; $i++)//display input fields for array
                {
                    echo "<label for='country-$i'>Country $i</label>";
                    echo "<input type='text' name='country[]' id='country-$i' required><br><br>";
                }

                echo "<input type='submit' name='btn_save' value='Save'>";
            }
        ?>
    </form>

    <?php
        if( isset($_POST["btn_save"]) )
        {
            //INPUT
            $countries = $_POST["country"];

            //PROCESS & OUTPUT
            echo "<p>You have been to:</p>";
            foreach($countries as $country)
            {
                echo "<p>$country</p>";
            }
        }
    ?>
</body>
</html>