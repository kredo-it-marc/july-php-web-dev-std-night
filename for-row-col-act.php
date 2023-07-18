<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Col Row Activity</title>
</head>
<body>
    <div class="container pt-5">
        <div class="card w-25 mx-auto mb-5">
            <div class="card-header">
                <h1 class="card-title fs-4 text-center">Row Col Activity</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="row" class="form-label">Rows</label>
                    <input type="number" class="form-control mb-3" name="row" id="row" required>
                    <label for="col" class="form-label">Columns</label>
                    <input type="number" class="form-control mb-3" name="col" id="col" required>
                    <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary w-100">
                </form>    
            </div>
        </div>
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $row = $_POST["row"];
                $col = $_POST["col"];

                //PROCESS & OUTPUT
                echo "<h1 class='text-center mb-3'>$row x $col Table</h1>";
                echo "<table class='table table-bordered table-striped'>";
                for($row_counter =1; $row_counter<= $row; $row_counter++) //display the row
                {
                    echo "<tr>";
                        for($col_counter =1; $col_counter<= $col; $col_counter++) //display the columns
                        {
                            echo "<td></td>";
                        }
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
    </div>
</body>
</html>