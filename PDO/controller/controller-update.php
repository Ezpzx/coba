<?php
include "../model/kelas-database.php";

$sw=new DatabaseSiswa();
$id=$_POST["txtid2"];
echo $id;
$nis=$_POST["txtnis2"];
$nama=$_POST["txtnama2"];
$alamat=$_POST["txtalamat2"];

$u=$sw->update($id,$nis,$nama,$alamat);
if($u==TRUE){
    header("Location: ../view/view-siswa.php");
}
else{
    echo "GAGAL";
}

?>