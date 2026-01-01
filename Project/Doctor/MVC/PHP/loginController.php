<?php
session_start();
include_once '../DB/db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $loginStatus = loginCheck($username,$password);

    if($loginStatus){
        $_SESSION["username"] = $username;
        $_SESSION["role"] =  "doctor";
        header("Location: ../HTML/doctordashboard.php");
        exit();
    }
    else{
        echo "Cant login";
    }
}
include_once '../HTML/login.php';
?>