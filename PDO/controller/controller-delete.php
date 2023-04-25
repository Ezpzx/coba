<?php
include "../model/kelas-database.php";
$sw=new DatabaseSiswa();
$input=$sw->deleteSiswa($_GET["id"]);
if($input==True){
    header("Location: ../view/view-siswa.php");
}
else{
    echo "Gagal Dihapus";
}
?>