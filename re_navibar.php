<?php
session_start();
 include ('connection.php');

if (!isset($_SESSION['name'])) {
  header("Location: "); // Redirect to login page if not logged in
  exit();
}

$userName = $_SESSION['name']; // Use the correct key 'user_name'

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .header {
    overflow: hidden;
    background-color: hsl(0, 0%, 95%);
    padding:  10px;
    border-radius: 8px;
  }
  
  .header a {
    float: left;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
  }
  
  .header a.logo {
    font-size: 35px;
    font-weight: 800;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
    color: rgb(3, 70, 129);
  }
  
  .header a:hover {
    background-color: #5f95be;
    color: rgb(255, 255, 255);
  }

 
  .header-right {
    float: right;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
   
   
  }

  .header-right a{
    color: rgba(0, 0, 0, 0.5);
    font-size: 20px;
  }
  
  .home-upper{
    background-color:#034681;
    display: flex;
    justify-content: space-between;
    height: 480px;
    border-radius: 15px;
  }
  </style>
</head>
<body>

<div class="header">
            <a href="index.php" class="logo">MediCare</a>
            <div class="header-right">
              <a href="search-doctor-result.php">Find a doctor</a>
              <a href="login.php">
                <?php
             echo $userName;
              ?></a>
            </div>
        </div>

  
</body>
</html>