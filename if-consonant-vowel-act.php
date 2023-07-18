<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Consonant or Vowel</title>
</head>
<body>
    <div class="container pt-5">
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $letter = $_POST["letter"];

                //PROCESS
                $letter_lowercase = strtolower($letter); //strtolower() converts the string to lowercase
                $letter_count = strlen($letter); //strlen(); counts how many characters there are in the string
                $is_alpha = ctype_alpha($letter); //ctype_alpha() returns TRUE if and only if the argument/ string is only made up of letters. Otherwise, FALSE.

                if($letter_count > 1 || !$is_alpha) //checking if the input violates the RULES
                {
                    echo "<div class='alert alert-danger w-50 mx-auto'>The $letter is INVALID.</div>";
                }
                elseif( $letter_lowercase== 'a' || $letter_lowercase == 'e' || $letter_lowercase=='i' || $letter_lowercase=='o'  || $letter_lowercase=='u') //check if the input is a vowel
                {
                    echo "<div class='alert alert-success w-50 mx-auto'>The $letter is a VOWEL.</div>";
                }
                else
                {
                    echo "<div class='alert alert-primary w-50 mx-auto'>The $letter is a CONSONANT.</div>";
                }
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-header">
                <h1 class="card-title fs-4 text-center">Consonant or Vowel</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="letter" class="form-label">Letter</label>
                    <input type="text" class="form-control mb-3" name="letter" id="letter" required>
                    <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary w-100">
                </form>    
            </div>
        </div>
    </div>
</body>
</html>