<?php 
    include "database.php"; 
    session_start();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Minimart Catalog | Products</title>
</head>
<body class="bg-light" style="min-height:100vh;">
    <?php include "navbar.php"; ?>
    <div class="container py-5">
        <div class="w-75 mx-auto">
            <div class="text-end mb-4">
                <a href="add-product.php" class="btn btn-success btn-sm"><i class="fa-solid fa-circle-plus"></i> Add Product</a>        
            </div>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Section</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- display the products from the database -->
                    <?php
                        $products = getProducts();

                        if( $products && $products->num_rows>0) //check if $products evaluates to TRUE. check if the sql statement returned some results from the database
                        {
                            //display the products
                            while($row = $products->fetch_assoc())
                            {
                                echo "<tr>";
                                echo "<td>".$row["id"]."</td>";
                                echo "<td>".$row["title"]."</td>";
                                echo "<td>".$row["description"]."</td>";
                                echo "<td>".$row["price"]."</td>";
                                echo "<td>".$row["section_id"]."</td>";
                                echo "</tr>";
                            }
                        }
                        else
                        {
                            //display a message
                            echo "<tr><td colspan='5' class='fst-italic text-center'>No records to display.</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php
    function getProducts()
    {
        $conn = dbConnect(); //Connect to the database
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql); //run the sql statement

        return $result;
    }

?>
