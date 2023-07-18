<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Kredo Cafe</title>
</head>
<body>
    <div class="container pt-5">
        <div class="w-50 mx-auto text-center">
            <form action="" method="post">
                <h1 class="display-3">How many people are going to eat at the cafe?</h1>
                <input type="number" name="no_of_customers" id="no-of-customers" class="form-control mb-3" required>
                <input type="submit" value="Submit" name="btn_submit" class='btn btn-primary w-75'>
            </form>

            <form action="" method="post">
                <?php
                    if( isset($_POST["btn_submit"]) )
                    {
                        //INPUT
                        $no_of_customers = $_POST["no_of_customers"];

                        //PROCESS & OUTPUT
                        echo "<hr>";
                        echo "<h1 class='display-4'>Enter the ages for each customer:</h1>";
                        
                        for($i=1; $i<= $no_of_customers; $i++)
                        {
                            echo "<label class='form-label' for='customer-$i'>Customer $i</label>";
                            echo "<input type='number' class='form-control mb-3' name='age[]' id='customer-$i' required>";
                        }

                        echo "<input type='submit' name='btn_save' value='Save' class='btn btn-success w-75'>";
                    }
                ?>
            </form>

            <?php
                if( isset($_POST["btn_save"]) )
                {
                    //INPUT
                    $ages = $_POST["age"];

                    //PROCESS
                    $prices = getPrice($ages);
                    $total_price = getTotalPrice($prices);
                    $ages_count = count($ages);

                    //OUTPUT
            ?>
                    <table class="table table-bordered table-striped w-75 mx-auto mt-4">
                        <thead class="table-dark">
                            <tr><th>Age</th><th>Price</th></tr>
                        </thead>
                        <tbody>
            <?php
                            for($i=0; $i< $ages_count; $i++)
                            {
                                echo "<tr>";
                                echo "<td>".$ages[$i]."</td>";
                                echo "<td>".$prices[$i]."</td>";
                                echo "</tr>";
                            }
            ?>            
                            <tr class="table-primary"><td>Total Price</td><td><?php echo $total_price?></td></tr>
                            
                            <tr class="table-danger"><td>No. of Customers</td><td><?= $ages_count?></td></tr>
                        </tbody>
                    </table>
            <?php 
                }
            ?>
        </div>
    </div>
</body>
</html>
<?php
    function getPrice($ages)
    {
        $regular_rate = 325;
        $prices = [];

        foreach($ages as $age)
        {
            if(0<=$age && $age<=5)
            {
                array_push($prices, 0);
            }
            elseif(6<=$age && $age <= 10)
            {
                $discounted_price = $regular_rate * .90;
                array_push($prices, $discounted_price);
            }
            elseif(60 <= $age)
            {
                $discounted_price = $regular_rate * .95;
                array_push($prices, $discounted_price);
            }
            else
            {
                array_push($prices,$regular_rate);
            }
        }

        return $prices;
    }

    function getTotalPrice($prices)
    {
        $total = 0;
        foreach($prices as $price)
        {
            $total += $price; //$total = $total + $price;
        }

        return $total;
    }
?>