<?php
session_start();
session_destroy();
header("Location: tts.php");
?>