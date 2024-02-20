<?php
$conn = mysqli_connect('localhost', 'root','' , 'my_doctor');

if ($conn) {
    echo "Connection successfully";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
?>
