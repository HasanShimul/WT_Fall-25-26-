<?php
session_start();
if(!isset($_SERVER["role"])){
    header("Location :../start.php");
    exit();
}

?>