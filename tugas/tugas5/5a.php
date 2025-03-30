<?php

$stokhp = [
    [
        "Nama" => "iPhone 14 Pro",
        "Merek" => "Apple",
        "Jumlah" => "30 unit",
        "Kapasitas" => "256GB",
        "Gambar" => "iphone14pro.jpg"
    ],

    [
        "Nama" => "Samsung Galaxy S23",
        "Merek" => "Samsung",
        "Jumlah" => "50 unit",
        "Kapasitas" => "512GB",
        "Gambar" => "galaxys23.jpg"
    ],

    [
        "Nama" => "Xiaomi 13 Pro",
        "Merek" => "Xiaomi",
        "Jumlah" => "100 unit",
        "Kapasitas" => "256GB",
        "Gambar" => "xiaomi13pro.jpeg"
    ],

    [
        "Nama" => "Oppo Find X5 Pro",
        "Merek" => "Oppo",
        "Jumlah" => "75 unit",
        "Kapasitas" => "256GB",
        "Gambar" => "findx5pro.jpeg"
    ],

    [
        "Nama" => "Vivo X90 Pro",
        "Merek" => "Vivo",
        "Jumlah" => "80 unit",
        "Kapasitas" => "512GB",
        "Gambar" => "vivox90pro.jpeg"
    ],

    [
        "Nama" => "Realme GT Neo 3",
        "Merek" => "Realme",
        "Jumlah" => "50 unit",
        "Kapasitas" => "256GB",
        "Gambar" => "gtneo3.jpeg"
    ],

    [
        "Nama" => "Google Pixel 7",
        "Merek" => "Google",
        "Jumlah" => "20 unit",
        "Kapasitas" => "128GB",
        "Gambar" => "pixel7.jpeg"
    ],

    [
        "Nama" => "Asus ROG Phone 6",
        "Merek" => "Asus",
        "Jumlah" => "30 unit",
        "Kapasitas" => "512GB",
        "Gambar" => "rogphone6.jpg"
    ],

    [
        "Nama" => "OnePlus 11",
        "Merek" => "OnePlus",
        "Jumlah" => "60 unit",
        "Kapasitas" => "256GB",
        "Gambar" => "oneplus11.jpeg"
    ],

    [
        "Nama" => "Nothing Phone (1)",
        "Merek" => "Nothing",
        "Jumlah" => "55 unit",
        "Kapasitas" => "256GB",
        "Gambar" => "nothingphone1.jpeg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar HP</title>
</head>

<body>
    <h1>Daftar Stok HP di Toko</h1>
    <?php foreach ($stokhp as $hp) : ?>
        <ul>
            <li>
                <img src="IMG/<?= $hp["Gambar"]; ?>" width="150">
            </li>
            <li>Nama HP: <?= $hp["Nama"]; ?></li>
            <li>Merek: <?= $hp["Merek"]; ?></li>
            <li>Jumlah: <?= $hp["Jumlah"]; ?></li>
            <li>Kapasitas: <?= $hp["Kapasitas"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>