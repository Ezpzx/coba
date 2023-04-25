<?php
include "../model/kelas-database.php";

$sw=new DatabaseSiswa();

//array --> wadah dari database
$dtsw=$sw->selectSiswa();
echo "<table border='1' style='border-collapse: collapse'>";
echo "<tr>";
echo "<td>No</td><td>NIS</td><td>Nama</td><td>Alamat</td><td>ACTION</td>";
echo "</tr>";
foreach($dtsw as $x){
    echo "<tr>";
    echo "<td>". $x['id'] ."</td><td>". $x['nis'] ."</td><td>". $x['nama'] ."</td><td>". $x['alamat'] ."</td> <td><a href='../controller/controller-delete.php?id=". $x['id']." '>Delete</a> | <a href='../controller/controller-edit.php?id=" . $x['id'] ."'>Edit</a></td>";
    echo "</tr>";
}
echo "</table>";
?>