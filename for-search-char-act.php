<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Search Activity</title>
</head>
<body>
    <div class="container pt-5">
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $word = $_POST["word"];

                //PROCESS
                $word_lowercase = strtolower($word);
                $char_count = strlen($word);
                $count = 0;

                for($counter = 0; $counter < $char_count; $counter++)
                {
                    $char = substr($word_lowercase,$counter,1);

                    if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u')
                    {
                        ++$count;
                    }
                }

                //OUTPUT
                echo "<div class='alert alert-primary w-50 mx-auto text-center'>The word <span class='fw-bold fst-italic'>$word</span> has <span class='fw-bold fst-italic'>$count</span> vowels.</div>";
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="word" class="form-label">Enter a word:</label>
                    <input type="text" class="form-control mb-3" name="word" id="word" required>
                    <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary w-100">
                </form>
            </div>
        </div>
    </div>
</body>
</html>