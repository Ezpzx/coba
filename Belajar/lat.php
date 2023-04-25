<?php
    $data=[
        ["no"=>1,"nim"=>"001","nama"=>"Aryo","ipk"=>3.9],
        ["no"=>2,"nim"=>"002","nama"=>"Antoni","ipk"=>3.8],
        ["no"=>3,"nim"=>"003","nama"=>"Rendi","ipk"=>3.7],
        ["no"=>4,"nim"=>"004","nama"=>"Dimas","ipk"=>3.6],
        ["no"=>5,"nim"=>"005","nama"=>"Rio","ipk"=>3.7],
    ];
    echo "<form method='POST'>";
        echo "Nama: <input type='text' name='nama'>";
        echo "<input type='submit'value='Tampilkan'>";
    echo "</form>";
    echo "<table style='border-collapse: collapse' border=1px cellPadding='6'>";
        if(isset($_POST["nama"])){
            $test=0;
            foreach($data as $d){
                if($d["nim"]==$_POST["nama"]){
                    echo "<tr>";
                    echo "<th width=100px>No</th>";
                    echo "<th width=100px>NIM</th>";
                    echo "<th width=100px>Nama</th>";
                    echo "<th width=100px>IPK</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>". $d["no"] ."</td>";
                    echo "<td>". $d["nim"] ."</td>";
                    echo "<td>". $d["nama"] ."</td>";
                    echo "<td>". $d["ipk"] ."</td>";
                    $test+=1;
                echo "</tr>";
                }
            }
            if($test==0){
                echo "<i>Inputan anda salah / Tidak Sesuai </i>";
            }

        }
        else{
                echo "<tr>";
                echo "<th width=100px>No</th>";
                echo "<th width=100px>NIM</th>";
                echo "<th width=100px>Nama</th>";
                echo "<th width=100px>IPK</th>";
                echo "</tr>";
            foreach($data as $d){
                echo "<tr>";
                    echo "<td>". $d["no"] ."</td>";
                    echo "<td>". $d["nim"] ."</td>";
                    echo "<td>". $d["nama"] ."</td>";
                    echo "<td>". $d["ipk"] ."</td>";
                echo "</tr>";
            }
        }
        
    echo"</table>";
?>
