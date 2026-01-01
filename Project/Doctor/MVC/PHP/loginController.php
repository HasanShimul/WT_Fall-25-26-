<?php
include_once '../HTML/login.php';
include_once '../DB/db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $loginStatus = loginCheck($username,$password);
    if($loginStatus){
        echo "Login";
    }
    else{
        echo "Cant login";
    }

}
?>