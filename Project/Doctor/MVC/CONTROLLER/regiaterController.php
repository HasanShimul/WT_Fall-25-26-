<?php
require_once("../MODEL/db.php");
//include_once '../VIEW/registration.php';
$ValidationStatus = [];

if (isset($_POST['submit'])) {

    $data = [
        'name' => $_POST["name"],
        'email' => $_POST["email"],
        'phone' => $_POST["phone"],
        'password' => $_POST["password"],
        'cpassword' => $_POST["confirm-panel"],
        'medical_degree' => $_POST["medical-degree"],
        'specilization' => $_POST["specilization"],
        'license_number' => $_POST["license-number"],
        'yearofexperience' => $_POST["yearofexperience"],
        'fee' => $_POST["fee"],
        'availableTime' => $_POST["availableTime"]
    ];

    $ValidationStatus = checkValidation($data);
    $old = $data;

    if (empty($ValidationStatus)) {
        echo "Validation passed";
    } 
    

}  
include_once '../VIEW/registration.php';
?>