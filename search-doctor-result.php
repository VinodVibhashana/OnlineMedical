<?php

include ('./connection.php');

// Fetch doctors' data from the database
$sql = "SELECT * FROM doctors";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Searched doctors</title>
        <link rel="stylesheet" href="search-doctor-result.CSS">
    </head>
    <body>

        <div class="header">
            <a href="index.php" class="logo">MediCare</a>
            <div class="header-right">
              <a href="search-doctor-result.php">Find a doctor</a>
              <a href="login.php">Login</a>
            </div>
        </div>

        <div class="notice">
            <h2>Found 6 results</h2>
        </div>

        <div class="container">
            <div class="left-collumn">
                <form action="" method="POST">
                    <input type="text" id="name" name="name" placeholder="Doctor's name">
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
                    <input type="date" id="date" name="date">
                    <input type="text" id="city" name="city" placeholder="Enter your city">
                    <input type="submit" name="Search" value="Search">
                </form>
            </div>

            <div class="content">
           
                <?php echo""
         

            ?>
               

                
                    
                    <?php
                        // Check if there are doctors in the database
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="doctor-profile">';
                                echo '<img src="images/doctorProfile.png" alt="Doctor" style="max-width:70%">';
                                // Display doctor information
                                //echo '<div class="doctor-profile">';
                                //echo '<img src="images/' . $row['image'] . '" alt="Doctor Image">';
                                echo '<h2>' . $row['name'] . '</h2>';
                                echo '<p>Specialization: ' . $row['specialization'] . '</p>';
                                echo '<p>Hospital: ' . $row['hospital'] . '</p>';
                                // Add other information as needed
                                //echo '</div>';
                                echo '<a href="doctor-profile.php?id=' . $row['doctor_id'] . '"><button>View details</button></a>';
                            echo '</div>';
                            }
                        } else {
                            echo '<p>No doctors available.</p>';
                        }

                        // Close the database connection
                        mysqli_close($conn);
                        ?>

            
            </div>
        </div>


    </body>

</html>
