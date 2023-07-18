<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Leap Year</title>
</head>
<body>
    <div class="container pt-5">
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $year = $_POST["year"];

                //PROCESS & OUTPUT
                if( ($year % 4 == 0 && $year % 100 != 0) || ($year%4 ==0 && $year%100 ==0 && $year%400 == 0))
                {
                    echo "<div class='alert alert-primary w-50 mx-auto'>$year is a leap year.</div>";
                }
                else
                {
                    echo "<div class='alert alert-danger  w-50 mx-auto'>$year is NOT a leap year.</div>";
                }
            }
        ?>
       <div class="card w-25 mx-auto">
            <div class="card-header">
                <h1 class="card-title fs-4 text-center">Leap Year</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="year" class="form-label">Year</label>
                    <input type="number" class="form-control mb-3" name="year" id="year" required>
                    <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary w-100">
                </form>    
            </div>
        </div>
    </div>
</body>
</html>