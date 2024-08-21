<?php
#Connection
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$database = "farmerdetails";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Unable to connect: " . mysqli_connect_error());
} 
// else{
//     echo "Connection Successfull";
// }

?>

