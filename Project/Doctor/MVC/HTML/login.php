<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="../HTML/Style/login.css">
    </head>
<body >
    <div class="container">
    <div class="left">
    <svg
    viewBox="0 0 800 600"
    width="400"
    height="300"
    xmlns="http://www.w3.org/2000/svg"
    preserveAspectRatio="xMidYMid meet"
  >

  <!-- Background gradient -->
  <defs>
    <linearGradient id="bg" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#0b3c5d"/>
      <stop offset="100%" stop-color="#1c6dd0"/>
    </linearGradient>
  </defs>

  <rect width="800" height="600" fill="url(#bg)" rx="40"/>

  <!-- Hospital building -->
  <rect x="220" y="180" width="220" height="260" rx="12" fill="#e6f0ff"/>
  <rect x="240" y="200" width="180" height="220" rx="8" fill="#3a7bd5"/>

  <!-- Windows -->
  <g fill="#a9c9ff">
    <rect x="260" y="220" width="40" height="40" rx="4"/>
    <rect x="320" y="220" width="40" height="40" rx="4"/>
    <rect x="380" y="220" width="40" height="40" rx="4"/>

    <rect x="260" y="280" width="40" height="40" rx="4"/>
    <rect x="320" y="280" width="40" height="40" rx="4"/>
    <rect x="380" y="280" width="40" height="40" rx="4"/>

    <rect x="260" y="340" width="40" height="40" rx="4"/>
    <rect x="320" y="340" width="40" height="40" rx="4"/>
    <rect x="380" y="340" width="40" height="40" rx="4"/>
  </g>

  <!-- Medical cross -->
  <rect x="300" y="120" width="60" height="120" rx="12" fill="#ff4d4d"/>
  <rect x="270" y="150" width="120" height="60" rx="12" fill="#ff4d4d"/>

  <!-- Ambulance -->
  <rect x="120" y="400" width="180" height="60" rx="12" fill="#ffffff"/>
  <rect x="120" y="380" width="110" height="40" rx="10" fill="#e6f0ff"/>
  <circle cx="160" cy="470" r="14" fill="#1c6dd0"/>
  <circle cx="250" cy="470" r="14" fill="#1c6dd0"/>

  <!-- Ambulance cross -->
  <rect x="170" y="395" width="16" height="40" fill="#ff4d4d"/>
  <rect x="158" y="407" width="40" height="16" fill="#ff4d4d"/>

  <!-- Decorative heartbeat line -->
  <path
    d="M0 500 L120 500 L160 470 L200 530 L240 480 L280 500 L800 500"
    stroke="#9cc9ff"
    stroke-width="3"
    fill="none"
    opacity="0.5"
  />

</svg>
 </div>

 <div class="right">
<h1>Hospital Login</h1>
<p>Please sign in to continue</p>
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
                <td><center><button type="submit"><abbr title="let's go ">Login</abbr></button></center></td></tr>
            <tr>
            <td><p>Don't have account <a href="../PHP/regiaterController.php" > <abbr title="Wanna register">Register </abbr></a></p></td>
        </tr>
    </table>
    </form>
</center>
</div>
</div>
<body>
</html>