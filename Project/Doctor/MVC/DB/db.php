<?php

function getConnection(){
  $server = "localhost";
  $usename = "admin";
  $password = "123459876";
  $dbname = "webtecdb";

  $conn = mysqli_connect($server,$usename,$password,$dbname);

  return $conn;
}

function loginCheck($username,$password){
    
    return true;
}

?>