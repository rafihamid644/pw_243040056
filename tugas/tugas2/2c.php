<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pola Angka Menurun</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            font-family: Arial, sans-serif;
        }
        .row {
            display: flex;
        }
        .box {
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            background-color: salmon;
            margin: 2px;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    for ($i = 10; $i >= 1; $i--) { 
        echo "<div class='row'>";
        for ($j = 1; $j <= $i; $j++) { 
            echo "<div class='box'>$j</div>";
        }
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
