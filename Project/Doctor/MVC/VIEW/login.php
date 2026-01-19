<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="../HTML/Style/login.css">
    <link rel="icon" href="../Favicon/loginFavicon.png" type="image/png">

</head>

<body>

    <div class="container">
        <div class="right">

            <center>
                <h1>Hospital Login</h1>
                <p>Please sign in to continue</p>
                <form action="../CONTROLLER/loginController.php" method="POST">
                    <table>
                        <tr>
                            <td><label for="username">Name : </label></td>
                            <td><input type="text" name="username" id="username"></td>
                        </tr>
                        <tr>
                            <td><label for="password">Password : </label></td>
                            <td><input type="password" name="password" id="password"></td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <td>
                                <center><button type="submit"><abbr title="let's go ">Login</abbr></button></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Don't have account <a href="../CONTROLLER/regiaterController.php"> <abbr
                                            title="Wanna register">Register </abbr></a></p>
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </div>

    <body>

</html>