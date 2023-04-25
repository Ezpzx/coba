<?php
    // #array manual
    //  $mahasiswa = ["Ezra","Abednego","Ez"];
    // // echo "Nama saya :". $mahasiswa[0];
    
    // #open indeks menggunakan for
    // for($x=0;$x<count($mahasiswa);$x++){
    //     echo "<br> Nama saya : ". $mahasiswa[$x];
    // }

    // #penggunaan foreach
    // foreach($mahasiswa as $mhs){
    //     echo "<br>Nama Saya : ". $mhs;
    // }

    #array 2D
    // $mahasiswa=[["mario","adi","rio"],["aryo","antoni","rendi"],["gama","tegar","dwi"]];
    // echo "Nama 1: ". $mahasiswa[0][2] ."<br>";
    // echo "Nama 2: ". $mahasiswa[2][2] ."<br>";

    // for($x=0;$x<count($mahasiswa);$x++){
    //     for($y=0;$y<count($mahasiswa);$y++){
    //         echo "Nama: ". $mahasiswa[$x][$y] . " | ";
    //     }
    // }
    // foreach($mahasiswa as $m){
    //     echo $m[1] . "-";
    // }

    #Array Asosiatif

    // $buku=[
    //     "Judul"=>"AADC",
    //     "Penulis"=>"Michael",
    //     "Harga"=>20000
    // ];
    // foreach($buku as $bk){
    //     echo $bk;
    // }

    $data=[
        ["Nama"=>"Dimas",
        "Alamat"=>"Senjoyo",
        "Usia"=>19],
        ["Nama"=>"Rio",
        "Alamat"=>"Getasan",
        "Usia"=>20],
        ["Nama"=>"Gilang",
        "Alamat"=>"Tingkir",
        "Usia"=>20]
    ];
    foreach($data as $a){
        foreach($a as $b){
            echo $b . "<br>";
        }
    }
    foreach($data as $d){
        echo $d["Nama"] ." ";
        echo $d["Alamat"] ." ";
        echo $d["Usia"] ." ";
        echo"<br>";
    }
?>