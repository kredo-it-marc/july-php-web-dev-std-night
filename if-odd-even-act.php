<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Odd Even</title>
</head>
<body>
    <div class="container pt-5">
        <?php
            if( isset($_POST["btn_submit"]))
            {
                //INPUT
                $num = $_POST["num1"];

                //PROCESS & OUTPUT
                //determine if the number is odd or even
                //odd - number is NOT divisible by 2
                //even - number is divisble by 2
                if( $num % 2 == 0) //check if the number is even
                {
                    echo "<p class='text-primary text-center'>$num is Even</p>";
                }
                else
                {
                    echo "<p class='text-danger text-center'>$num is Odd</p>";
                }
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-header">
                <h1 class="card-title fs-4 text-center">Odd Even Activity</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="num1" class="form-label">Number 1</label>
                    <input type="number" class="form-control mb-3" name="num1" id="num1" required>
                    <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary w-100">
                </form>    
            </div>
        </div>
    </div>
</body>
</html>