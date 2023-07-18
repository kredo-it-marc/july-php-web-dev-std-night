<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>If Else Greater</title>
</head>
<body>
    <div class="container pt-5">
        <div class="row justify-content-center mb-5">
            <?php
                if( isset($_POST["btn_submit"]) )
                {
                    //INPUT
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];

                    //PROCESS & OUTPUT
                    if( $num1 > $num2 )
                    {
                        echo "<div class='col-1 p-3 bg-success'>
                                <h1 class='text-white text-center'>$num1</h1>
                            </div>
                            <div class='col-1 p-3 bg-warning'>
                                <h1 class='text-white text-center'>$num2</h2>
                            </div>";
                    }
                    elseif($num1 == $num2)
                    {
                        echo "<div class='col-1 p-3 bg-success'>
                                <h1 class='text-white text-center'>$num1</h1>
                            </div>";
                    }
                    else
                    {
                        echo "<div class='col-1 p-3 bg-success'>
                                <h1 class='text-white text-center'>$num2</h1>
                            </div>
                            <div class='col-1 p-3 bg-warning'>
                                <h1 class='text-white text-center'>$num1</h2>
                            </div>";
                    }
                }
            ?>
        </div>
        <div class="card w-25 mx-auto">
            <div class="card-header">
                <h1 class="card-title fs-4 text-center">If Else Greater</h1>
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