<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <th>
        <?php
        for($i=1;$i<51;$i++){
            if($i%2==0){
                echo"<h4 style='color :red'>". $i . "</h4>";
            }
            else{
                echo $i;
            }
        }
        ?>
        </th>
        <th>
        <?php
        $a=25;
        while($a<76){
            if($a%2==0){
                echo $a;
            }
            else{
                echo"<h4 style='color :blue'>". $a . "</h4>";
            }
            $a++;
        }
    ?>
        </th>
    </tr>
    </table>
   

</body>
</html>