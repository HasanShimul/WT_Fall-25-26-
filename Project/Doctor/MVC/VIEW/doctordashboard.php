<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../HTML/Style/doctordashboard.css">
    <title>Doctor dashboard</title>
</head>
<body>
    <nav id="navVar">
        <div>
            <p>Welcome DR <?php echo $_SESSION["username"]; ?></p>
        </div>
        <div>
          <ul>
            <li><button>Home</button></li>
            <li><button>Report</button></li>
            <li><button id="profileButton"><a href="profile.php">Profile</a></button></li>
            <li><button id="logoutbutton"><a href="../PHP/logoutController.php">Logout</a></button></li>
           </ul>
        </div>
    </nav>
    <main>
        <div></div>
    </main>
    
</body>
</html>