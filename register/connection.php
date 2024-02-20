<?php
$conn = mysqli_connect('localhost', 'root','' , 'medical_channel_db');

if ($conn) {
    echo "Connection successfully";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
?>
