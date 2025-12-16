<?php
$name = $email = $day = $month = $year = $gender = $degree = $blood_group = "";
$nameError = $emailError = $dayError = $monthError = $yearError = $genderError = $degreeError = $bloodError=$dobError = "";
 

function cleanInput($data){
     if(!isset($data)) return "";

     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);

     return $data;
}

function validName($name){
    if(empty($name)){
        return "Name is required";
    }
    if(strlen($name) <2){
        return "At least 2 character need";
    }
    if(!preg_match("/^[a-zA-Z]/" , $name)){
        return "Name must start with letter";
    }
    if(!preg_match("/^[a-zA-Z .-]*$",$name)){
        return "Name can contain only letters,period,dash only";
    }
    return "";

}

function validEmail($data){
    if(empty($data)){
        return "email is required";
    }
    if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
        return "Invalid email";
    }
    return "";
}
function validDOB($day,$month,$year){
    if(empty($day) || empty($month) || empty($year)){
      return "Must fill all ";
    }
    if(!((int)$day >=1 && (int)$day <=31)){
        return "day must be 1-31";
    }
    if(!((int)$month >=1 && (int)$month <=12)){
        return "month must be 1-12";
    }
    if(!((int)$year >=1953 && (int)$year <=1998)){
        return "year should be 1953-1998";
    }

    return "";
}
function validGender($gender){
    if(!($gender == "Male" || $gender == "Female")){
        return "Must select one";
    }
    return "";
}

function validDegree($degree1,$degree2,$degree3,$degree4){
    $counter = 0;
    if($degree1 == "ssc"){
        $counter++;
    }
    if($degree2 == "hsc"){
        $counter++;
    }
    if($degree3 == "bsc"){
        $counter++;
    }
    if($degree4 == "msc"){
        $counter++;
    }
    if($counter <2){
        return "select at least 2";
    }
    return "";
}

function validBloodGrooup($bloodGroup){
   if(!($bloodGroup == "A+" || $bloodGroup == "A-" || $bloodGroup == "B+" ||
   $bloodGroup == "B-" || $bloodGroup == "AB+" || $bloodGroup == "AB-" || 
   $bloodGroup == "O+" || $bloodGroup == "O+" )){
    return "Must select one";
   }
   
    return "";
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = cleanInput($_POST["nam"] ?? "");
    $nameError = validName($name);

    $email = cleanInput($_POST["email"]);

    $emailError = validEmail($email);

    $day = cleanInput($_POST["day"]);
    $month = cleanInput($_POST["month"]);
    $year = cleanInput($_POST["year"]);
    $dobError = validDOB($day,$month,$year);

    $gender = cleanInput($_POST["gender"]);
    $genderError = validGender($gender);

    $degree1 = cleanInput($_POST["degree1"]);
    $degree2 = cleanInput($_POST["degree2"]);
    $degree3 = cleanInput($_POST["degree3"]);
    $degree4 = cleanInput($_POST["degree4"]);

    $degreeError = validDegree($degree1,$degree2,$degree3,$degree4);

    $blood_group = cleanInput($_POST["blood-group"]);
    $bloodError = validBloodGrooup($blood_group);
    



}

?>

<DOCTYPE html>
    <html>
        <head>
            <style>
             .form-style{
                 border: 0.125rem solid black;
                 padding: 1rem;
                 width: 50%;
                 margin : 0.5rem;
             }
             .error{
                color: red;
             }
            </style>
        </head>
        <body>
           <center>
           <div>
            <form action="" method="POST">
                <div id="name-box" class = "form-style">
                    <label for="name">NAME</label>
                    <input id="name" type="text" name="nam" value="<?php echo $name ?>"> <br>
                    <span class="error"><?php echo $nameError ?></span>
                </div>
                <div class = "form-style">
                    <label for="">Email</label>
                    <input type="text" name="email"  value="<?php echo $email ?>">
                    <p  class="error"><?php echo $emailError ?></p>
                </div>

                <div class = "form-style">
                    <label for="">Date of Birth</label>
                   <input type="number" name="day" value="<?php echo $day; ?>" placeholder="date">
                   <input type="number" name="month" value="<?php echo $month ?>" placeholder="month">
                   <input type="number" name="year" value="<?php echo $year ?>" placeholder="year">
                   <span class="error"><?php echo $dobError ?></span>
                  
                </div>
                <div class = "form-style">
                    <label for="" >GENDER</label>
                    <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"; ?>>Male
                    <input type="radio" name="gender" value="Female" <?php if($gender =="Female") echo "checked"; ?>>Female
                    <span class="error"><?php echo $genderError ?></span>
                </div>
                <div class = "form-style">
                    <label for="">DEGREE</label>
                    <input type="checkbox" id="degree1" name="degree1" value="ssc" <?php if($degree1 == "ssc") echo "checked"; ?>>
                    <label for="degree1">SSC</label> 
                    <input type="checkbox" id="degree2" name="degree2" value="hsc" <?php if($degree2 == "hsc") echo "checked"; ?>>
                    <label for="degree2">HSC</label>
                    <input type="checkbox" id="degree3" name="degree3" value="bsc" <?php if($degree3 == "bsc") echo "checked"; ?>>
                    <label for="degree3">BSc</label>
                    <input type="checkbox" id="degree4" name="degree4" value="msc" <?php if($degree4 == "msc") echo "checked"; ?>>
                    <label for="degree4">MSc</label>
                    <span class="error"><?php echo $degreeError ?></span>
                </div>
                <div class = "form-style">
                    <label for="">BLOOD GROUP</label>
                    <select name="blood-group" id="">
                        <option value=""></option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O-">O-</option>
                        <option value="O+">O+</option>
                        
                    </select>
                    <span class="error"><?php echo $bloodError ?></span>
                </div>
                <button type="submit">Submitt</button>
            </form>
           </div>
           </center>
        </body>
    </html>