<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Foo Bar Activity</title>
</head>
<body>
    <div class="container pt-5">
        <div class="mb-3 text-center">
            <?php
                if( isset($_POST["btn_submit"]) )
                {
                    //INPUT
                    $start = $_POST["start"];
                    $end = $_POST["end"];

                    //PROCESS & OUTPUT
                    if($start < $end)
                    {
                        for($counter=$start; $counter <= $end; $counter++)
                        {
                            if($counter%3 == 0 && $counter%5 ==0 ) //check if the current number is divisible by 3 AND 5
                            {
                                echo "<span class='me-3'>FOOBAR</span>";
                            }
                            elseif($counter%3 == 0 ) //check if the number is divisible by 3 only
                            {
                                echo "<span class='me-3'>FOO</span>";
                            }
                            elseif($counter%5 == 0) //check if the number is divisible by 5 only
                            {
                                echo "<span class='me-3'>BAR</span>";
                            }
                            else
                            {
                                echo "<span class='me-3'>$counter</span>";
                            }
                        }
                    }
                    else
                    {
                        for($counter=$start; $counter>=$end; $counter--)
                        {
                            if($counter%3 == 0 && $counter%5 ==0 ) //check if the current number is divisible by 3 AND 5
                            {
                                echo "<span class='me-3'>FOOBAR</span>";
                            }
                            elseif($counter%3 == 0 ) //check if the number is divisible by 3 only
                            {
                                echo "<span class='me-3'>FOO</span>";
                            }
                            elseif($counter%5 == 0) //check if the number is divisible by 5 only
                            {
                                echo "<span class='me-3'>BAR</span>";
                            }
                            else
                            {
                                echo "<span class='me-3'>$counter</span>";
                            }
                        }
                    }
                }
            ?>
        </div>
        
        <div class="card w-25 mx-auto">
            <div class="card-header">
                <h1 class="card-title fs-4 text-center">Foo Bar</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="start" class="form-label">Start</label>
                    <input type="number" class="form-control mb-3" name="start" id="start" required>
                    <label for="end" class="form-label">End</label>
                    <input type="number" class="form-control mb-3" name="end" id="end" required>
                    <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary w-100">
                </form>    
            </div>
        </div>
    </div>
</body>
</html>