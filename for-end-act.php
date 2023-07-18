<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For End Activity</title>
</head>
<body>
    <?php
        if( isset($_POST["btn_submit"]) )
        {
            //INPUT
            $num = $_POST["num"];

            //PROCESS & OUTPUT
            for($counter = 1; $counter<= $num; $counter++)
            {
                echo "<span style='margin-right:10px;'>$counter</span>";
            }
        }
    ?>
    <form action="" method="post">
        <label for="num">Enter number</label>
        <input type="number" name="num" id="num" min="1">
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>