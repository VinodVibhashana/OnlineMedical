<?php 
session_start();
include('connection.php');

// Check if the user_name session variable is set
if (isset($_SESSION['user_name'])) {
    // User is logged in
    $userName = $_SESSION['user_name'];

}



?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
        <link rel="stylesheet" href="re_index.CSS">
    </head>
    <body>

        <div class="header">
            <a href="index.php" class="logo">MediCare</a>
            <div class="header-right">
              <a href="search-doctor-result.php">Find a doctor</a>
              <a href="login.php"><?php echo $userName ?></a>
            </div>
        </div>

        <div class="home-upper">
                <div class="sub-div1">
                    <!-- Content for the first sub-div -->
                    <h2>WE TAKE CARE OF YOUR HEALTHY LIFE</h2>
                    <h3>Channel over 2000 doctors island wide</h3><br>
                    <button id="doctor-button" name="doctor-button"><span>How does it work</span></button>
                </div>
                <div class="sub-div2">
                    <img src="images\home-doctor.png">
                </div>
        </div>

        <div class="home-search">
            <form action="" method="POST">
                <label for="dName">Doctor's name </label>
                <input type="text" id="dName" name="dName" placeholder="Enter doctors's name(Optional)">
                <label for="specialization">Specialization</label>
                <select id="specializationDrop" name="specializationDrop">
                    <option value="Dermatogolist">Dermatogolist</option>
                    <option value="Cardiologist">Cardiologist</option>
                    <option value="Gynocologist">Gynocologist</option>
                    <option value="Radiologist">Radiologist</option>
                    <option value="Psychiatrist">Psychistrist</option>
                    <option value="Neurologist">Neurologist</option>
                    <option value="Orthopedic Surgeon">Orthopedic Surgeon</option>
                    <option value="Pediatrician">Pediatrician</option>
                </select>
                <label for="appointmentDate">Appointment Date</label>
                <input type="date" id="appointmentDate" name="appointmentDate">

                <input type="submit" value="Search">

            </form>
        </div>

       


    </body>
</html>