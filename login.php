<?php
session_start();
include "admin/connection.php";

// insert-data eken copy krl danna//
if(isset($_POST['submit'])) {
 
    
    $email = $_POST['email'];
    $password=$_POST['password'];

    //
    $sql = "SELECT * FROM `patients` WHERE `gmail` = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {

            $user_data = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $user_data['id']; // Assuming 'id' is the primary key in your 'patients'table
            $_SESSION['user_name'] = $user_data['name'];
            $_SESSION['user_email'] = $user_data['gmail'];



            // Login successful, redirect to another page
            header("Location: re_index.php");
            exit();
        } else {
            
           // Incorrect email or password
           echo "Incorrect email or password";
        }
    } else {
        echo "Error: ". $sql. "<br>". mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login page</title>
        <link rel="stylesheet" href="login.CSS">
    </head>

    <body>
        <div class="header">
            <a href="index.php" class="logo">MediCare</a>
            <div class="header-right">
              <a href="search-doctor-result.php">Find a doctor</a>
              <a href="login.php">Login</a>
            </div>
        </div>

        <div class="container">
            <div class="left">
                <p>e-Chanelling made easy</p>
            </div>

            <div class="form-side">
                <h2>WELCOME.</h2>
                <P>don't have an account <a href='register.php'><b>REGISTER</b></a></P>
                <form action="" method="POST">
                    <label for="email" name="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email">
                    <label for="password" name="password">Password</label>
                    <input type="text" name="password" id="password" placeholder="Enter password"><br>
                    <input type="submit" name="submit" value="Log in">
                </form>
            </div>
        </div>
    </body>
</html>
