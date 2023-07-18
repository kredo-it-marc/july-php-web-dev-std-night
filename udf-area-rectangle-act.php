<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Area of a Rectangle</title>
</head>
<body>
    <div class="container pt-5">
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $length = $_POST["length"];
                $width = $_POST["width"];

                //PROCESS
                $area = getArea($length, $width);

                //OUTPUT
                displayOutput($length, $width, $area);
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-header">
                <h1 class="card-title fs-4 text-center">Area of a Rectangle</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="length" class="form-label">Length</label>
                    <input type="number" class="form-control mb-3" name="length" id="length" required>
                    <label for="width" class="form-label">Width</label>
                    <input type="number" class="form-control mb-3" name="width" id="width" required>
                    <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary w-100">
                </form>    
            </div>
        </div>
    </div>
</body>
</html>
<?php
    function getArea($length, $width)
    {
        return $length * $width;
    }

    function displayOutput($length, $width, $area)
    {
        echo "<div class='alert alert-success w-50 mx-auto'>The area of the rectangle given the length $length and the width $width is $area sq. units</div>";
    }
?>