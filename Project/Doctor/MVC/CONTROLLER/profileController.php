<?php
session_start();
include_once "../MODEL/db.php";
 
if($_SERVER["REQUEST_METHOD"] == "POST" ){

    $data = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'yearofexperience' => $_POST['yearofexperience'],
        'fee' => $_POST['fee'],
        'license' => $_SESSION['doctor']['license_number']
    ];

    $profilestatus = updateProfile($data);
    if($profilestatus){
        $_SESSION['updateMsg'] = "Profile update successfull.";
    }else{
        $_SESSION['updateMsg'] = "Update failed";
    }
}


include_once "../VIEW/profile.php";
?>