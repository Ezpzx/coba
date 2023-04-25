<?php
include "../kelas/kelas-kalkulator.php";

//Membuat Objek
$kal= new HitungKalkulator();

//Mengisi Attribut dengan Nilai
$kal->n1=$_POST["n1"];
$kal->n2=$_POST["n2"];

//Memanggil Method
$jum=$kal->hitungTambah();
$ket=$kal->cekBilangan();

echo "<br>Hasil Penambahan : ". $jum;
echo "<br>Keterangan : ". $ket; 
?>