<?php
include "../model/kelas-database.php";

$sw=new DatabaseSiswa();
$getSiswa=$sw->selectSiswaId($_GET["id"]);
echo "<form method='POST' action='controller-update.php'>";
foreach ($getSiswa as $gs) {
    echo "<input type='hidden' name='txtid2' value='". $gs["id"] ."'>";
    echo "NIS :";
    echo "<input type='text' name='txtnis2' value='". $gs["nis"] ."'><br><br>";
    echo "Nama :";
    echo "<input type='text' name='txtnama2' value='". $gs["nama"] ."'><br><br>";
    echo "Alamat :";
    echo "<input type='text' name='txtalamat2' value='". $gs["alamat"] ."'><br><br>";
}
echo "<input type='submit' value='Submit'>";
echo "</form>";


?>