<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Arithmetic Activity</title>
</head>
<body>
    <div class="container pt-5">
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];

                //PROCESS
                $sum = sum($num1, $num2); //addition
                $difference = difference($num1, $num2); //subtraction
                $product = multiply($num1, $num2); //multiplication
                $quotient = getQuotient($num1, $num2); //division

                //OUTPUT
                displayOutput($num1, $num2, $sum, "sum", "success");
                displayOutput($num1, $num2, $difference, "difference", "warning");
                displayOutput($num1, $num2, $product, "product","danger");
                displayOutput($num1, $num2, $quotient, "quotient","primary");

            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-header">
                <h1 class="card-title fs-4 text-center">Arithmetic Activity</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="num1" class="form-label">Number 1</label>
                    <input type="number" class="form-control mb-3" name="num1" id="num1" required>
                    <label for="num2" class="form-label">Number 2</label>
                    <input type="number" class="form-control mb-3" name="num2" id="num2" required>
                    <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary w-100">
                </form>    
            </div>
        </div>
    </div>
</body>
</html>
<?php
    function sum($x, $y)
    {
        return $x + $y;
    }

    function difference($x, $y)
    {
        return $x-$y;
    }

    function multiply($x, $y)
    {
        return $x * $y;
    }

    function getQuotient($x, $y)
    {
        return $x/$y;
    }

    function displayOutput($num1, $num2, $result, $operation, $color)
    {
        echo "<div class='alert alert-$color w-50 mx-auto'>The $operation of $num1 and $num2 is $result</div>";
    }
?>