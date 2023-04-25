<?php
session_start();
if(isset($_GET['as'])){
    $_SESSION['satu']=$_SESSION['satu'] + $_GET['as'];
    header("Location: tts.php");
}
else if(isset($_GET['ad'])){
    $_SESSION['dua'] = $_SESSION['dua'] + $_GET['ad'];
    header("Location: tts.php");
}
else if(isset($_GET['at'])){
    $_SESSION ['tiga'] = $_SESSION['tiga'] + $_GET['at'];
    header("Location: tts.php");
}
else{
    header("Location: tts.php");
}
?>
