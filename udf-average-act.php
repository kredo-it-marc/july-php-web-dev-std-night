<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Average Activity</title>
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
                $average = getAverage($num1, $num2);

                //OUTPUT
                displayOutput($num1, $num2, $average);
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-header">
                <h1 class="card-title fs-4 text-center">Average Activity</h1>
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
    function getAverage($x, $y)
    {
        return ($x + $y) / 2;
    }

    function displayOutput($num1, $num2, $average)
    {
        echo "<div class='alert alert-primary w-50 mx-auto'>The average of $num1 and $num2 is $average</div>";
    }
?>