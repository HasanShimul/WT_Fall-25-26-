<?php

function getConnection()
{
  $server = "localhost";
  $usename = "admin";
  $password = "123459876";
  $dbname = "webtecdb";

  $conn = mysqli_connect($server, $usename, $password, $dbname);

  return $conn;
}
function testData($data): string
{
  if (empty($data)) {
    return "";
  }
  $data = trim($data);
  $data = htmlspecialchars($data);
  return $data;
}
function checkValidation(array $data): array
{

  $error = [];
  $cleanData = [];

  foreach ($data as $key => $value) {

    $cleanValue = testData($value);
    $cleanData[$key] = $cleanValue;

    if ($cleanData[$key] == "") {
      $error[$key] = "Field is Required";
      continue;

    } else {
      if ($key === "email") {
        if (!filter_var($cleanValue, FILTER_VALIDATE_EMAIL)) {
          $error[$key] = "Email is not valid";
        }
      }
      if ($key === "phone") {
        $length = strlen($cleanValue);
        if ($length !== 11) {
          $error[$key] = "Phone number must be 11 digit";
        }
      }
      if ($key === "password") {
        $length = strlen($cleanValue);
        if ($length !== 8) {
          $error[$key] = "Password must be 8 digit";
        }
      }
    }
  }
  if ($cleanData['password'] !== $cleanData['cpassword']) {
    $error['cpassword'] = "Password dont match";
  }

  return $error;

}

function registerDoctor(array $data){
  $conn = getConnection();

  $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

  $sql = "INSERT INTO Doctor (name, email, phone, password, medical_degree, specilization,
                              license_number, yearofexperience, fee, availableTime)
  VALUES('{$data['name']}','{$data['email']}', '{$data['phone']}','{$hashedPassword}',
  '{$data['medical_degree']}','{$data['specilization']}','{$data['license_number']}',
  '{$data['yearofexperience']}','{$data['fee']}','{$data['availableTime']}') ";

if($conn->query($sql) === TRUE){
  return true;
}
return false;
}

function loginCheck($username, $password)
{
  $username = testData($username);

  $conn = getConnection();
  $sql = "SELECT * FROM Doctor WHERE name = '$username'";
  $result = mysqli_query($conn,$sql);

  if(mysqli_num_rows($result) >0){
    $row = mysqli_fetch_assoc($result);
    
    if(password_verify($password, $row["password"])){
      return $row;
    }

     
  }
 return false;
}

function updateProfile(array $data){
   $conn =getConnection();

   $name = testData($data["name"]);
   $email = testData($data["email"]);
   $phone = testData($data["phone"]); 
   $yearofexperience = testData($data["yearofexperience"]);
   $fee = testData($data["fee"]);
   $license = testData($data["license"]);

   $sql = "UPDATE Doctor SET 
   name = '$name',
   email = '$email',
   phone = '$phone',
   yearofexperience = '$yearofexperience',
   fee = '$fee' WHERE license_number = '$license';
    ";
return(mysqli_query($conn,$sql));

}

?>