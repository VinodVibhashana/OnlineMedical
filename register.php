<?php

session_start();
include "admin/connection.php";

// insert-data eken copy krl danna//
if(isset($_POST['submit'])) {
 
    $name = $_POST['name'];
    $city=$_POST['city'];
    $age=$_POST['age'];
    $number=$_POST['number'];
    $gender=$_POST['gender'];
    $nic= $_POST['nic'];
    $email = $_POST['email'];
    $password=$_POST['password'];

    //
    $sql="INSERT INTO `patients`( `name`, `city`, `age`, `mobile`, `gender`, `Id_number`, `gmail`, `password`) VALUES ('$name','$city','$age','$number','$gender','$nic','$email','$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;

        echo "<script>alert('Registered successfully');</script>";
        echo "<script>window.location.href='login.php';</script>";
    } else {
        echo "Error: ". $sql. "<br>". mysqli_error($conn);
    }

}?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register page</title>
        <link rel="stylesheet" href="register.CSS">
    </head>

    <body>
        <div class="header">
            <a href="index.php" class="logo">MediCare</a>
            <div class="header-right">
              <a href="search-doctor-result.php">Find a doctor</a>
              <a href="login">Login</a>
            </div>
        </div>

        <div class="container">
            <div class="left">
                <p>Register for a better experience...</p>
            </div>

            <div class="form-side">
                <h2>REGISTER NOW.</h2>
                <P>already have an account <a href='login.php'><b>LOG IN</b></a></P>
                <form action="" method="POST">
                    <label for="name" name="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter name.." required>
                    <label for="email" name="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label for="number" name="number">Phone number</label>
                    <input type="text" name="number" id="number" placeholder="Phone number" required>
                    <label for="id" name="id">NIC</label>
                    <input type="text" name="nic" id="nic" placeholder=" Enter NIC" required>
                    <label for="city" name="city">City</label>
                    <input type="text" name="city" id="city" placeholder=" Enter your city" required>
                    <label for="age" name="age">Age</label>
                    <input type="text" name="age" id="age" placeholder=" Enter your age" required>
                    <label for="gender" >Gender</label>
                    <select name="gender" id="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                   
                    
                    <label for="password" name="password">Enter a password</label>
                    <input type="text" name="password" id="password" placeholder="Enter password" required><br>
                    <input type="submit" name="submit" value="Register">
                </form>
            </div>
        </div>
        
       
    </body>
</html>
