<?php
    $jap_regions = [
        "Hokkaido" => ["Hokkaido" => "Sapporo"],
        "Chubu" => ["Ishikawa" => "Kanazawa", "Shizuoka" => "Fuji", "Toyama" => "Toyama", "Aichi" => "Nagoya"],
        "Chugoku" => ["Yamaguchi" => "Shimonoseki", "Tottori" => "Tottori"]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2D Array</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
        <?php
            foreach($jap_regions as $region => $sub_array)
            {
                echo "<h1>$region</h1>";

                echo "<table>";
                echo "<thead><tr><th>Prefecture</th><th>City</th></tr></thead>";
                echo "<tbody>";

                foreach( $sub_array as $prefecture => $city)
                {
                    echo "<tr><td>$prefecture</td><td>$city</td></tr>";
                }

                echo "</tbody>";
                echo "</table>";
            }
        
        ?>
</body>
</html>