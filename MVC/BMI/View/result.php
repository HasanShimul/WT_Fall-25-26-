<!DOCTYPE html>
<html>
<head>
    <title>BMI Result</title>
</head>
<style>
    .night-mode{
        color:yellow;
        background-color:rgb(100,100,100);
    }
</style>
<body>
    <center>
        <button id="mode">Day/Night</button>
    <h2>Hello, <?php echo htmlspecialchars($name); ?>!</h2>
    <h3>Your BMI is: <?php echo number_format($bmi, 2); ?></h3>

    <?php
        if ($bmi < 18.5) {
            echo "You are underweight.";
        } elseif ($bmi < 25) {
            echo "You have a normal weight.";
        } elseif ($bmi < 30) {
            echo "You are overweight.";
        } else {
            echo "You are obese.";
        }
    ?>
    <br><br>
    <a href="main.php">Calculate again</a>
    </center>
</body>
<script>
    
    const btn = document.getElementById("mode");
    const frame = document.body;

    btn.addEventListener('click',()=>{
        console.log("button clicked");
        frame.classList.toggle("night-mode");
    });
</script>
</html>
