<?php
session_start();
include_once '../MODEL/db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $loginStatus = loginCheck($username, $password);

    if ($loginStatus) {
        $_SESSION["doctor"] = $loginStatus;
        $_SESSION["role"] = "doctor";
        header("Location: ../VIEW/doctordashboard.php");
        exit();
    } else {
        $_SESSION['InvalidMsg'] = "Invalid username or password";
        //echo $InvalidMsg;  
        header("Location:../start.php");
        exit();

    }

}
include_once "../start.php";
?>