<?php
    $contacts = ["John" => "USA", "Sakura"=>"Japan", "Liam"=>"Singapore","Jane"=>"Korea"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Green Pages</title>
</head>
<body>
    <?php
        if( isset($_POST["btn_submit"]) )
        {
            //INPUT
            $name = $_POST["contact"];

            //OUTPUT
            echo "<p>$name lives in ".$contacts[$name]."</p>";
        }
    ?>
    <form action="" method="post">
        <label for="contacts">Select a contact:</label>
        <select name="contact" id="contacts" required>
            <option disabled selected>Select a contact</option>
            <?php
                foreach($contacts as $name => $address)
                {
                    echo "<option value='$name'>$name</option>";
                }
            ?>
        </select>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>