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
    <title>Minimart Catalog | Delete Product</title>
</head>
<body class="bg-light" style="min-height:100vh;">
    <?php include "navbar.php"; ?>
    <div class="container py-5">
        <div class="card w-50 mx-auto">
            <div class="card-body text-center">
                <h1 class="display-1"><i class="fa-solid fa-triangle-exclamation text-danger"></i></h1>
                <p>Are you sure you want to delete product <strong class="fst-italic">INSERT PRODUCT NAME HERE</strong>?</p>

                <div class="row justify-content-center mt-4">
                    <div class="col-3">
                        <a href="products.php" class="btn btn-outline-secondary btn-sm w-100">Cancel</a>
                    </div>
                    <div class="col-3">
                        <form action="" method="post">
                            <input type="hidden" name="product_id">
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm w-100" name="btn_delete">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>