<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../VIEW/CSS/doctordashboard.css">
    <title>Doctor dashboard</title>
</head>
<body>
    <nav id="navVar">
        <div>
            <p>Welcome DR <?php echo $_SESSION["doctor"]['name']; ?></p>
        </div>
        <div>
          <ul>
            <li><button>Home</button></li>
            <li><button>Report</button></li>
            <li><button id="profileButton"><a href="../CONTROLLER/profileController.php">Profile</a></button></li>
            <li><button id="logoutbutton"><a href="../CONTROLLER/logoutController.php">Logout</a></button></li>
           </ul>
        </div>
    </nav>
    <main>
        <div></div>
    </main>
    
</body>
</html>