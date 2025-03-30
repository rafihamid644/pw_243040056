<?php
$angka = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['angka'])) {
    $angka = intval($_POST['angka']);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Latihan6b</title>
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
    <form method="POST">
        <label for="angka">Masukkan Angka:</label>
        <input type="number" name="angka" id="angka" required>
        <button type="submit">Tampilkan</button>
    </form>
    <br>
    <div class="container">
        <?php
        if ($angka > 0) {
            for ($i = 0; $i < $angka; $i++) {
                echo '<div class="row">';
                for ($j = 0; $j < $angka - $i; $j++) {
                    $color = ($j % 2 == 0) ? 'lightblue' : 'white';
                    echo '<div class="box" style="background-color: ' . $color . '">' . ($angka - $i) . '</div>';
                }
                echo '</div>';
            }
        }
        ?>
    </div>
</body>

</html>