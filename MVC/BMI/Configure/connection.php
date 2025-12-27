<?php
$server = "localhost";
$userName = "phpmyadmin";
$dbPassword = "123459876";
$dbName = "phpmyadmin";

$conn = new mysqli($server,$userName,$dbPassword,$dbName);
if($conn->connect_error){
    die("Connection Falied".$conn->connect_error);
}
 

?>