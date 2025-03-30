<?php
if (isset($_GET['angka'])) {
    $angka = intval($_GET['angka']);
} else {
    $angka = 10;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Latihan6a</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .row {
            display: flex;
        }

        .box {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid black;
            margin: 2px;
            font-size: 16px;
            font-weight: bold;
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        for ($i = 0; $i < $angka; $i++) {
            echo '<div class="row">';
            for ($j = 0; $j < $angka - $i; $j++) {
                echo '<div class="box">' . ($angka - $i) . '</div>';
            }
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>