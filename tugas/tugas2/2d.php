<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pola Papan Catur</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(8, 50px); 
            grid-template-rows: repeat(8, 50px); 
            width: 400px;
            height: 400px;
            border: 2px solid black;
        }
        .box {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    for ($row = 0; $row < 8; $row++) { 
        for ($col = 0; $col < 8; $col++) { 
            $color = ($row + $col) % 2 == 0 ? "white" : "black"; 
            echo "<div class='box $color'></div>";
        }
    }
    ?>
</div>

</body>
</html>
