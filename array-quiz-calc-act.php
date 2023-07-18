<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Calculator</title>
</head>
<body>
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
        <?php
            if( isset($_POST["btn_save"]) )
            {
                //INPUT
                $scores = $_POST["score"];

                //PROCESS
                $total = 0;
                $score_count = count($scores);

                foreach($scores as $score)
                {
                    $total += $score; // $total = $total + $score;
                }

                $average = $total / $score_count;

                //OUTPUT
                echo "<div class='alert alert-success w-50 mx-auto mb-3'>The average of the scores is $average</div>";
            }
        ?>
        <div class="card w-25 mx-auto mb-5">
            <div class="card-header">
                <h1 class="card-title fs-4 text-center">Quiz Calculator</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="no-of-quizzes" class="form-label">How many quizzes do you have?</label>
                    <input type="number" class="form-control mb-3" name="no_of_quizzes" id="no-of-quizzes" required>
                    <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary w-100">
                </form> 

                <form action="" method="post">
                    <?php
                        if( isset($_POST["btn_submit"]) )
                        {
                            //INPUT
                            $no_of_quizzes = $_POST["no_of_quizzes"];

                            //PROCESS & OUTPUT
                            echo "<hr class='mb-3'>";
                            echo "<p>Enter your scores:</p>";

                            for($i=1; $i<=$no_of_quizzes; $i++)
                            {
                                echo "<label class='form-label' for='quiz-$i'>Quiz No. $i</label>";
                                echo "<input type='number' class='form-control mb-3' name='score[]' id='quiz-$i' required>";
                            }

                            echo "<input type='submit' class='btn btn-success w-100' value='Save' name='btn_save'>";
                        } 
                    ?>
                </form>   
            </div>
        </div>
    </div>   
</body>
</html>