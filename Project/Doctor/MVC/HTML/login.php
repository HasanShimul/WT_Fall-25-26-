<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
</head>
<body>
    <center>
    <form  action="../PHP/loginController.php" method="POST">
        <table>
            <tr>
                <td><label for="username">Name : </label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password : </label></td>
                <td><input type="password"name="password" id="password"></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td><center><button type="submit">Login</button></center></td></tr>
            <tr>
            <td><p>Don't have account <a href="../PHP/regiaterController.php">Register</a></p></td>
        </tr>
    </table>
    </form>
</center>
    
</body>
</html>