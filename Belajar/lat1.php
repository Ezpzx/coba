<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table rules="all">
    <tr>
        <th>n</th>
        <th>3n</th>
    </tr>
    <tr>
        <td>
        <?php
        for($i=1;$i<10;$i++){
            echo "<p>". $i ."</p>";
        }
        ?>
        </td>
        <td>
        <?php
        for($i=1;$i<10;$i++){
            echo "<p>". $i*3 ."</p>";
        }
    ?>
        </td>
    </tr>
    </table>
   

</body>
</html>