<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../View/Style/registration.css">
    </head>
    <body>
        <button id="day-night">Day/Night</button>

<div class="logo-container">
<img id="logo" src="../Picture/doctorLogo.png" width="50"  alt="dotorlogo">

</div>
       <div class="registration-panel">
        <img id="bg-img" src="../Picture/doctorRegistration.jpeg" alt="Doctor Registration Image" width="100%" height="100%">
       <h1 >Doctor Registratioin Panel</h1>
        <div>
            <div >
                <form action="" method="POST">
                    <div class="input-panel">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="input-panel">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email">
                    </div>
                    <div class="input-panel">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone">
                    </div>
                    <div class="input-panel">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password">
                    </div>
                    <div class="input-panel">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="text" name="confirm-panel" id="confirm-password">
                    </div>
                    <div class="input-panel">
                        <label for="medical-degree">Medical-Degree</label>
                        <select name="medical-degree" id="medical-degree">
                            <option value="">select</option>
                            <option value="MBBS">MBBS</option>
                            <option value="BDS">BDS</option>
                            <option value="ND">MD</option>
                            <option value="MS">MS</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="input-panel">
                        <label for="specilization">Specilization</label>
                        <select name="specilization" id="specilization">
                            <option value="">select</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Neurology">Neurology</option>
                            <option value="Orthopedics">Orthopedics</option>
                            <option value="General-Physician">General-Physician</option>
                            <option value="Dermatology">Dermatology</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="input-panel">
                        <label for="license-number">Medical License Number</label>
                        <input type="text" name="license-number" id="license-number">
                    </div>
                    <div class="input-panel">
                        <label for="yearofexperience">Year of Experience</label>
                        <input type="number" name="yearofexperience" id="yearofexperience">
                    </div>
                    <div class="input-panel">
                        <label for="fee">Consultation Fee</label>
                        <input type="number" name="fee" id="fee">
                    </div>
                   <div class="input-panel">
                    <label for="availableTime">Available Time</label>
                    <select name="availableTime" id="availableTime">
                        <option value=""></option>
                        <option value="option1">Saturday-Thursday</option>
                        <option value="option2">Sunday-Wednesday</option>
                        <option value="option3">Friday</option>
                        <option value="others">Others</option>
                    </select>
                   </div>

                    <button type="submit">Registration</button>
                </form>
            </div>
        </div>
       </div>
    </body>
</html>