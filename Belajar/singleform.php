<?php
    echo "<form method='POST'>";
        echo "Nama: <input type='text' name='nama'>";
        echo "<input type='submit'value='OK'>";
    echo "</form>";

    if(isset($_POST["nama"])){
        echo "Selamat Datang: ". $_POST["nama"];
    }
    else{
        echo "<i>Silahkan isi nama anda</i>";
    }
?>
