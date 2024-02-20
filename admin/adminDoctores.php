
<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: "Lato", sans-serif;
    }

    /* Style the tab */
    .tab {
      float: left;
      /* border: 1px solid #ccc; */
      background-color: #1a53ff;
      color: #ff0000;
      width: 15%;
      height: 200px;
    }

    /* Style the buttons inside the tab */
    .tab button {
      display: block;
      background-color: inherit;
      color:  #f2f2f2;
      padding: 22px 16px;
      width: 100%;
      border: none;
      outline: none;
      text-align: left;
      cursor: pointer;
      transition: 0.3s;
      font-size: 17px;

    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      float: left;
      padding: 0px 12px;
      /* border: 10px solid #ccc; */
      width: 70%;
      border-left: none;
      height: 200px;
    }

    .addmin_doctors {

      background-color: #ccfff5;
    }

    #edit_button {
      background-color: #00ff00;
      color:#000000;
      margin: 5px;
      border-radius: 5px;
      height: 40px;
      width: 60px;
    }

    #edit_button:hover {
      background-color: #e6ffe6;
      color:#000000;
      cursor: pointer;
    
    
    }

    #delete_button {
      background-color: #ff0000;
      margin: 2px;
      border-radius: 5px;
      height: 40px;
      width: 60px;
    }

    #delete_button:hover {
      background-color:  #ffebe6;
      color:#000000;
      cursor: pointer;
      
    }

    td {
      border: 1px solid black;
      padding: 10px;
      margin: auto;
      border: radius 10px;

    }
    .addmin_patients{
      background-color: #e6ffcc;


    }
    .addmin_appointment{
      background-color: #ffd6cc;
    }
    .addmin_specialization{
      background-color: #e6ffcc;
      border-radius: 10px;

    }


.doctors {
  background-color: #7f89f6;
  width: 200px;
}

.applications {
  background-color: #ec7070;
  width: 200px;
 }
 
.flex_dashbord{
  display: flex;
  padding:auto;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
.btn{
  width: 10%;
  height: 20%;
  background-color:#034681;
  color: #ddd;
  margin-left: 95%;
  border-radius: 10px;

}

.btn:hover {
      background-color:	 #e6e6e6;
      color:#000000;
      cursor: pointer;
      width: 12%;
      height: 22%;
      
    
    
    }
  </style>
</head>

<body>

  <h2>Admin Panal</h2>
  
  <div class="flex-container">
     
</div>


  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Dashbord')" id="defaultOpen">Dashbord</button>
    <button class="tablinks" onclick="openCity(event, 'Appointments')">Appointments</button>
    <button class="tablinks" onclick="openCity(event, 'logout')">logout</button>
    
  </div>


  <div id="Dashbord" class="tabcontent">

    <h3>Dashbord</h3>
    
      
      <div class="applications">Appointment
        <br>
        <?php
            $sql = "SELECT * FROM `appointment1` WHERE 1";
            $result = mysqli_query($conn, $sql);
            $count=0;
            while ($row = mysqli_fetch_assoc($result)) {
              $count++; // Increment count for each row
              ?>
        
          <?php
            }
        echo "<h1> $count </h1>";
        ?>
      </div>  
  </div>
  </div>

 
<!-- appointment tabel -->
  <div id="Appointments" class="tabcontent">
    <h3>Manage Appointments</h3>
    <a href="" > <button type="button" class="btn"> ADD </button> </a>
    <br>
    <br>
    <table class="addmin_appointment">
    <tr>
    <th>Appo_ID</th>
    <th>Patienty_ID</th>
    <th>Mobile</th>
    <th>Free</th>
    <th>Hospital</th>
    <th>Location</th>
    <th>Appointment_Date</th>
    <th>Appointment_Time</th>
    <th>Edit</th>
    <th>Delete</th>
    

<?php
$sql = "SELECT * FROM `appointment1` WHERE 1";
$result = mysqli_query($conn, $sql);

// Count variable to keep track of the total rows
$count = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $count++; // Increment count for each row
    ?>
    <tr>
        <td><?php echo $row['appointmentId']; ?></td>
        <td><?php echo $row['PatientyId']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['free']; ?></td>
        <td><?php echo $row['hospital']; ?></td>
        <td><?php echo $row['location']; ?></td>
        <td><?php echo $row['Appointment_date']; ?></td>
        <td><?php echo $row['Appointment_time']; ?></td>
        <td>
            <form method="get"><button id="edit_button" type="button">Edit</button></form>
        </td>
        <td>
            <form method="get"><button id="delete_button" type="button">Delete</button></form>
        </td>
    </tr>
<?php 
}
?>



  </table>
  </div>



  <div id="logout" class="tabcontent">
    <h3>Logout</h3>
  </div>

  

  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>

</body>

</html>