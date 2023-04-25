<?php
include "../model/kelas-database.php";

$sw= new DatabaseSiswa();
$input=$sw->insertSiswa($_POST["txtnis"],$_POST["txtnama"],$_POST["txtalamat"]);
if($input==True){
    echo "Berhasil Diinput";
}
else{
    echo "Gagal Diinput";
}
?>