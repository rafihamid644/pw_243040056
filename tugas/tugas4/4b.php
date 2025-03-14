<?php
$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

echo "<h3>Macam-macam perangkat keras komputer</h3>";
echo "<ol>";
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
echo "</ol>";

array_push($hardware, "Card Reader", "Modem");

$customOrder = ["Card Reader", "Hard Disk", "Modem", "Motherboard", "PC Coller", "Processor", "SSD", "VGA Card"];
$hardware = array_intersect($customOrder, $hardware);
$hardware = array_values($hardware);

echo "<h3>Macam-macam perangkat keras komputer baru</h3>";
echo "<ol>";
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
echo "</ol>";
