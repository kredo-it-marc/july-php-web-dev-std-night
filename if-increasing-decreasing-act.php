<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increasing Decreasing</title>
</head>
<body>
    <?php
        if( isset($_POST["btn_submit"]))
        {
            //INPUT
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];

            //PROCESS & OUTPUT
            if( $num1 > $num2 && $num2 > $num3) //check if the numbers are in decreasing order
            {
                echo "<p>The numbers $num1, $num2, $num3 are in decreasing order.</p>";
            }
            elseif($num1 < $num2 && $num2 < $num3) //check if the numbers are in increasing order
            {
                echo "<p>The numbers $num1, $num2, $num3 are in increasing order.</p>";
            }
            else
            {
                echo "<p>The numbers $num1, $num2, $num3 are NEITHER in increasing nor decreasing order.</p>";
            }

        }
    ?>
    <form action="" method="post">
        <label for="num1">Number 1</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Number 2</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <label for="num3">Number 3</label>
        <input type="number" name="num3" id="num3" required>
        <br><br>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>