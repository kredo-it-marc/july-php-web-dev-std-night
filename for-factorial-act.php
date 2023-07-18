<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Activity</title>
</head>
<body>
    <?php
        if( isset($_POST["btn_submit"]) )
        {
            //INPUT
            $input = $_POST["num_input"];

            //PROCESS
            $factorial = factorial($input);

            //OUTPUT
            displayOutput($input, $factorial);
        }
    ?>
    <form action="" method="post">
        <label for="num-input">Enter Number</label>
        <input type="number" name="num_input" id="num-input" min="0" required>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>
<?php
    function factorial($num)
    {
        $factorial = 1;

        if( $num == 0)
        {
            return $factorial;
        }
        else
        {
            for($counter = $num; $counter>=1; $counter--)
            {
                $factorial *= $counter; //$factorial = $factorial * $counter;
            }

            return $factorial;
        }
    }

    function displayOutput($input, $factorial)
    {
        echo "<div class='alert alert-success w-50 mx-auto'>The factorial of $input is $factorial.</div>";
    }
?>