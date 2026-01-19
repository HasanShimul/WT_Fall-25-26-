<?php

function getConnection(){
  $server = "localhost";
  $usename = "admin";
  $password = "123459876";
  $dbname = "webtecdb";

  $conn = mysqli_connect($server,$usename,$password,$dbname);

  return $conn;
}
function testData($data): string{
  if(empty($data)){
    return "";
  }
  $data = trim($data);
  $data = htmlspecialchars($data);
  return $data;
}
function checkValidation(array $data):array{
 
  $error = [];
  $cleanData = [];
  foreach($data as $key => $value){
      $cleanValue = testData($value);
      $cleanData[$key] = $cleanValue;
      if($cleanData[$key] == ""){
        $error[$key] = "Required";
        return [
          'status' => false,
          'error' => $error,
          'data'   => $cleanData
      ];
      }
      
  }
}

function loginCheck($username,$password){
    
    return true;
}

?>