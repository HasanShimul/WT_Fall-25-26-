<!DOCTYPE html>
<html>
<head>
    <title>BMI Form</title>
</head>
<style>
    .night{
        color:white;
        background-color:black;
    }
</style>
<body id="body">
    <center>
    <h2>Enter Your Details</h2>
    <button id="mode">Day/Night</button>
    <form method="POST" action="">
        Name: <input type="text" name="name"  ><br><br>
        Height (cm): <input type="number" name="height"  ><br><br>
        Weight (kg): <input type="number" name="weight"  ><br><br>
        <button type="submit">Calculate BMI</button>
    </form>
    </center>
</body>
<script>
      const btn =  document.getElementById("mode");
       
    btn.addEventListener('click',()=>{
      body.classList.toggle("night");
       
    });
</script>
</html>
