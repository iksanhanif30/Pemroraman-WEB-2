<?php

$list_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];


/**
 * Nilai didalam array masing-masing memiliki sebuah kunci yang disebut dengan index
 * 
 * index dimulai dari 0
 */

echo $list_buah[2];
echo "<br>List berisi". count($list_buah) . "buah";

// Mencetak seluruh nilai di dalam array
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

//menambah nilai array
$list_buah[] = "Durian";
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Menghapus nilai array berdasarkan index
unset($list_buah[1]);
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

//mengubah nilai array berdasarkan index
$list_buah[0] = "Manggis";
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

//mencetak seluruh nilai array beserta indexnya
echo "<ul>";
foreach ($list_buah as $index => $buah) {
    echo "<li>Buah dengan $index adalah $buah</li>";
}
echo "</ul>";




?>