<?php
$username = $_POST['username'];
if(username_is_available($username)) {
 echo 'available';
} else {
 echo 'taken';}
function username_is_available($username) {
 $conn = mysqli_connect('localhost', 'root', '', 'lab');
 if(mysqli_connect_errno()) {
 die('Failed to connect to the database: ' . mysqli_connect_error());
 }
 $query = "SELECT * FROM users WHERE name = '$username'";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) == 0) {
 return true; // username is available
 } else {
 return false; // username is taken
 } }
?>