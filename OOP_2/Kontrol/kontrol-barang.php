<?php
include "../Kelas/kelas-barang.php";
$bar= new DaftarBarang();


$data=$bar->tampilkanData();
$jumlah=$bar->jumlah();
echo "<table style='border-collapse:collapse' border=1px>";
echo "<tr>";
echo "<td>Nama Barang</td>";
echo "<td>Harga</td>";
echo "</tr>";
foreach($data as $b){
    echo "<tr>";
    echo "<td>". $b["nama"] ."</td>";
    echo "<td>". $b["harga"] ."</td>";
    echo "</tr>";
}
echo "</table>";
echo "Jumlah :". $jumlah;
?>