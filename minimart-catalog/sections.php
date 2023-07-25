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
    <title>Minimart Catalog | Sections</title>
</head>
<body class="bg-light" style="min-height:100vh;">
    <?php include "navbar.php"; ?>
    <div class="container py-5">
        <?php
            if( isset($_POST["btn_add"]) )
            {
                //INPUT
                $section = $_POST["section"];

                //PROCESS
                createSection($section);
            }    
        ?>
        <form action="" method="post">
            <div class="row mx-auto w-75">
                <div class="col text-end">
                    <label for="section" class="form-label">Add Section</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="section" name="section" required>
                </div>            
                <div class="col text-start">
                    <input type="submit" value="Add" class="btn btn-success" name="btn_add">
                </div>
            </div>
        </form>
        
        <div class="mt-5 w-50 mx-auto">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Section</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- display your  sections here -->
                    <?php
                        $sections = getSections();

                        if($sections && $sections->num_rows > 0 )
                        {
                            while($row = $sections->fetch_assoc())
                            {
                                echo "<tr>"; 
                                echo "<td>".$row["id"]."</td>"; 
                                echo "<td>".$row["title"]."</td>"; 
                                echo "</tr>"; 
                            }
                        }
                        else
                        {
                            echo "<tr><td class='fst-italic text-center' colspan='2'>No records to display.</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php
    function createSection($section)
    {
        $conn = dbConnect();
        $sql = "INSERT INTO sections(title) VALUES('$section')";
        $result = $conn->query($sql);

        if($result)
        {
            header("Refresh:0"); //reload the page
        }
        else
        {
            //display an error message
            echo "<div class='alert alert-danger w-50 mx-auto'>Failed to insert the section. <small>".$conn->error."</small></div>";
        }
    }

    function getSections()
    {
        $conn= dbConnect();
        $sql = "SELECT * FROM sections";
        $result = $conn->query($sql);

        return $result;
    }
?>