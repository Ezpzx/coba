<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php
        $data=[
            ["no"=>1,"nim"=>"001","nama"=>"Aryo","ipk"=>3.9],
            ["no"=>2,"nim"=>"002","nama"=>"Antoni","ipk"=>3.8],
            ["no"=>3,"nim"=>"003","nama"=>"Rendi","ipk"=>3.7],
            ["no"=>4,"nim"=>"004","nama"=>"Dimas","ipk"=>3.6],
            ["no"=>5,"nim"=>"005","nama"=>"Rio","ipk"=>3.7],
        ];
        echo "<form method='POST'>";
        echo "Nama: <input type='text' name='nama' required>";
        echo "<input type='submit'value='Tampilkan'>";
        echo "</form>";
    ?>
    <br>
    <?php
        echo "<table class='table table-info table-striped'>";
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
                echo "<tr class='table-primary'>";
                echo "<th>No</th>";
                echo "<th>NIM</th>";
                echo "<th>Nama</th>";
                echo "<th>IPK</th>";
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>