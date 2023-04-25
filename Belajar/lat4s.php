<?php
    $nama=$_POST["nama"];
    $nim=$_POST["nim"];
    $gender=$_POST["rad"];
    echo "Selamat Datang ". $nama ."<br> <br>";
    if($gender == "pria"){
        echo"Anda adalah mahasiswa"."<br>";
        if(substr($nim,0,2)==67){
            echo "Progdi Teknik Informatika Angkatan ". substr($nim,2,4); 
        }
        else if(substr($nim,0,2)==68){
            echo "Progdi SI Angkatan ". substr($nim,2,4); 
        }
        else if(substr($nim,0,2)==69){
            echo "Progdi DKV Angkatan ". substr($nim,2,4); 
        }
        else{
            echo "Progdi diluar ti,si,dkv Angkatan ". substr($nim,2,4); 
        }
    } 
    else{
        echo"Anda adalah mahasiswi"."<br>";
        if(substr($nim,0,2)==67){
            echo "Progdi Teknik Informatika Angkatan ". substr($nim,2,4); 
        }
        else if(substr($nim,0,2)==68){
            echo "Progdi SI Angkatan ". substr($nim,2,4); 
        }
        else if(substr($nim,0,2)==69){
            echo "Progdi DKV Angkatan ". substr($nim,2,4); 
        }
        else{
            echo "Progdi diluar ti,si,dkv Angkatan ". substr($nim,2,4); 
        }
    }

?>