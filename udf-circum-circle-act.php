<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Circumference of a Circle</title>
</head>
<body>
    <div class="container pt-5">
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $radius = $_POST["radius"];

                //PROCESS
                $circumference = getCircumference($radius); 
                
                //OUTPUT
                displayOutput($radius, $circumference);
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-header">
                <h1 class="card-title fs-4 text-center">Circumference of a Circle</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="radius" class="form-label">Radius</label>
                    <input type="number" class="form-control mb-3" name="radius" id="radius" required>
                    <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary w-100">
                </form>    
            </div>
        </div>
    </div>
</body>
</html>
<?php
    function getCircumference($radius)
    {
        return 2 * pi() * $radius;
    }

    function displayOutput($radius, $circumference)
    {
        echo "<div class='alert alert-success w-50 mx-auto'>The circumference of the circle given the radius $radius is $circumference units.</div>";
    }
?>
