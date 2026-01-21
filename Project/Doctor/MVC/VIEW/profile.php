<?php
session_start();
$updateMsg = "";
if(isset($_SESSION['updateMSG'])){
    $updateMsg = $_SESSION['updateMsg'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="Style/profile.css">
    <link rel="icon" href="../Favicon/profileFavicon.png" type="image/png">
</head>

<body>
    <main>
        <div>
            <div><h1>Personal informatin</h1></div>
            <div>
                <form action="" method="POST">
                    <table>
                        <tr>
                            <td ><?php echo $updateMsg;?></td>
                        </tr>
                        <tr>
                            <td><label for="drname">Name : </label></td>
                            <td><input type="text" name="name" id="drname" value="<?php echo $_SESSION['doctor']['name']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="email"> Email</label></td>
                            <td><input type="text" name="email" id="email" value="<?php echo $_SESSION['doctor']['email']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="phone"> Phone</label></td>
                            <td><input type="text" name="phone" id="phone" value="<?php echo $_SESSION['doctor']['phone']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="yearofexperience"> YoEx</label></td>
                            <td><input type="text" name="yearofexperience" id="yearofexperience" value="<?php echo $_SESSION['doctor']['yearofexperience']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="fee"> Fee</label></td>
                            <td><input type="text" name="fee" id="fee" value="<?php echo $_SESSION['doctor']['fee']; ?>"></td>
                        </tr>
                      <tr><td> <button type="submit">Update</button></td></tr>
                    </table>
                </form>
            </div>
        </div>
    </main>


</body>

</html>