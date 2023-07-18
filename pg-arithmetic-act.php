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
                $sum = $num1 + $num2; //addition
                $difference = $num1 - $num2; //subtraction
                $product = $num1 * $num2; //multiplication
                $quotient = $num1 / $num2; //division

                //OUTPUT
                echo "<div class='alert alert-primary w-50 mx-auto'>The sum of $num1 and $num2 is $sum.</div>";
                echo "<div class='alert alert-success w-50 mx-auto'>The difference of $num1 and $num2 is $difference.</div>";
                echo "<div class='alert alert-warning w-50 mx-auto'>The product of $num1 and $num2 is $product.</div>";
                echo "<div class='alert alert-danger w-50 mx-auto'>The quotient of $num1 divided by $num2 is $quotient.</div>";
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