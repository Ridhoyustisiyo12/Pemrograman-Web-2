<?php
$ar_buah = ["Pepaya","Mangga","Pisang","Jambu"];

//cetak buah dengan index ke 2
echo "Ini adalah hasil data buah dalam array";
echo "<br/>Ini buah index ke 2 - $ar_buah[2]";
//cetak total buah
echo '<br/>Total buah adalah ' .count($ar_buah);

// cetak selurus data array buah
echo "<ol>";
foreach ($ar_buah as $buah ) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Tambahkan buah
$ar_buah[] = "Durian";

// hapus buah
unset($ar_buah[1]);

//ubah buah index ke dua menjadi manggis
$ar_buah[2] = "Manggis";

echo "<ol>";
foreach ($ar_buah as $buah ) {
    echo "<li>$buah</li>";
}
echo "</ol>";

?>
