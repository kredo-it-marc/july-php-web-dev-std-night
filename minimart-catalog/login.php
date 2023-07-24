<?php
    include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Minimart Catalog | Login</title>
</head>
<body class="bg-light" style="min-height:100vh;">
    <div class="container py-5">
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $username = $_POST["username"];
                $password = $_POST["password"];

                //PROCESS
                login($username, $password);
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-header">
                <h1 class="display-5 text-center card-title">Login</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" required class="form-control mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control mb-3" required>
                    <input type="submit" value="Login" name="btn_submit" class="btn btn-primary w-100">
                </form>
                <p class="my-3 text-center text-muted">Doesn't have an account? <a href="sign-up.php">Sign up here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    function login($username, $password)
    {
        $conn = dbConnect(); //connect to the db
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql); //run the SQL statement. Since this is a SELECT statement, it will return TRUE if the sql statement runs successfully and it will return the result at the same time. OTHERWISE, FALSE.

        if( $result->num_rows == 1) //check if the SQL statement has returned at most 1 result
        {
            //CHECK IF THE PASSWORD IS CORRECT   
            $user_details = $result->fetch_assoc(); //$result->fetch_assoc() takes 1 record from the result set and is returned as an associative array
            
            //compare the password from the form and the encrypted password from the database
            if( password_verify($password, $user_details["password"]) )
            {
                session_start();
                $_SESSION["user_id"] = $user_details["id"];
                $_SESSION["username"] = $user_details["username"];
                header("Location: products.php");
            }
            else
            {
                //display an error message
                echo "<div class='alert alert-danger mb-3 text-center w-50 mx-auto'>Incorrect password. Kindly try again. <small>".$conn->error."</small></div>";

            }
        }
        else
        {
            //display an error message
            echo "<div class='alert alert-danger mb-3 text-center w-50 mx-auto'>Incorrect username. Kindly try again. <small>".$conn->error."</small></div>";
        }
    }
?>