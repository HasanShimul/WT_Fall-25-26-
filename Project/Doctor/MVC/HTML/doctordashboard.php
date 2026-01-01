<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor dashboard</title>
</head>
<body>
    <nav>
        <p>Welcome DR <?php echo $_SESSION["username"]; ?></p>
        <ul>
           <li><button>Home</button></li>
           <li><button>Report</button></li>
           <li><button>Profile</button></li>
           <li><button>Logout</button></li>
        </ul>
    </nav>
    
</body>
</html>