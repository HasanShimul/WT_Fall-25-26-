<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../VIEW/CSS/registration.css">
</head>

<body>
    <button id="day-night">Day/Night</button>

    <div class="logo-container">
        <img id="logo" src="../Picture/doctorLogo.png" width="50" alt="dotorlogo">

    </div>
    <div class="registration-panel">
        <img id="bg-img" src="../Picture/doctorRegistration.jpeg" alt="Doctor Registration Image" width="100%"
            height="100%">
        <h1>Doctor Registratioin Panel</h1>
        <div>
            <div>

                <form action="" method="POST">

                    <div class="input-panel">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="<?= htmlspecialchars($old['name'])?>">
                        <?php if (!empty($ValidationStatus['name'])): ?>
                            <small class="error"><?= $ValidationStatus['name'] ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="input-panel">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" value="<?= htmlspecialchars(string: $old['email'])?>">
                        <?php if (!empty($ValidationStatus['email'])): ?>
                            <small class="error"><?= $ValidationStatus['email'] ?></small>
                        <?php endif; ?>

                    </div>
                    <div class="input-panel">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" value="<?= htmlspecialchars(string: $old['phone'])?>">
                        <?php if (!empty($ValidationStatus['phone'])): ?>
                            <small class="error"><?= $ValidationStatus['phone'] ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="input-panel">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" >
                        <?php if (!empty($ValidationStatus['password'])): ?>
                            <small class="error"><?= $ValidationStatus['password'] ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="input-panel">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" name="confirm-panel" id="confirm-password">
                        <?php if(!empty($ValidationStatus['cpassword'])){?>
                            <small class="error"><?= $ValidationStatus['cpassword'] ?></small>
                            <?php };?>
                    </div>
                    <div class="input-panel">
                        <label for="medical-degree">Medical-Degree</label>
                        <select name="medical-degree" id="medical-degree">
                            <option value="<?= htmlspecialchars($old['medical_degree'])?>">select</option>
                            <option value="MBBS">MBBS</option>
                            <option value="BDS">BDS</option>
                            <option value="ND">MD</option>
                            <option value="MS">MS</option>
                            <option value="others">Others</option>
                        </select>
                        <?php if (!empty($ValidationStatus['medical_degree'])): ?>
                            <small class="error"><?= $ValidationStatus['medical_degree'] ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="input-panel">
                        <label for="specilization">Specilization</label>
                        <select name="specilization" id="specilization">
                            <option value="<?= htmlspecialchars($old['specilization'])?>">select</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Neurology">Neurology</option>
                            <option value="Orthopedics">Orthopedics</option>
                            <option value="General-Physician">General-Physician</option>
                            <option value="Dermatology">Dermatology</option>
                            <option value="others">Others</option>
                        </select>
                        <?php if (!empty($ValidationStatus['specilization'])): ?>
                            <small class="error"><?= $ValidationStatus['specilization'] ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="input-panel">
                        <label for="license-number">Medical License Number</label>
                        <input type="text" name="license-number" id="license-number" value="<?= htmlspecialchars(string: $old['license_number'])?>">
                        <?php if (!empty($ValidationStatus['license_number'])): ?>
                            <small class="error"><?= $ValidationStatus['license_number'] ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="input-panel">
                        <label for="yearofexperience">Year of Experience</label>
                        <input type="number" name="yearofexperience" id="yearofexperience" value="<?= htmlspecialchars($old['yearofexperience'])?>">
                        <?php if (!empty($ValidationStatus['yearofexperience'])): ?>
                            <small class="error"><?= $ValidationStatus['yearofexperience'] ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="input-panel">
                        <label for="fee">Consultation Fee</label>
                        <input type="number" name="fee" id="fee" value="<?= htmlspecialchars($old['fee']) ?>">
                        <?php if (!empty($ValidationStatus['fee'])): ?>
                            <small class="error"><?= $ValidationStatus['fee'] ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="input-panel">
                        <label for="availableTime">Available Time</label>
                        <select name="availableTime" id="availableTime">
                            <option value="<?= htmlspecialchars($old['availableTime']) ?>"></option>
                            <option value="option1">Saturday-Thursday</option>
                            <option value="option2">Sunday-Wednesday</option>
                            <option value="option3">Friday</option>
                            <option value="others">Others</option>
                        </select>
                        <?php if (!empty($ValidationStatus['availableTime'])): ?>
                            <small class="error"><?= $ValidationStatus['availableTime'] ?></small>
                        <?php endif; ?>
                    </div>

                    <button id="registerButton" type="submit" name="submit">Registration</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>