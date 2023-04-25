<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // for($i=1;$i<=$_POST["txtn2"];$i++){
        //     for($j=1;$j<=$i;$j++){
        //         echo("*");
        //     }
        //     echo("<br>");
        //     // echo ($i."  ");
        //     // echo ($i*3 ."<br>");
        // }
        $a=$_POST["txtn2"];
        if($a%4==0){

            echo("<p style= 'color:red'>". "Tahun ". $a . " Adalah Tahun Kabisat". "</p>");
        }
        else{
            echo("Tahun ". $a . " Bukan Tahun Kabisat");
        }
    ?>
</body>
</html>