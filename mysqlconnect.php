<?php
$servername = "cssql.seattleu.edu";
$username = "ll_fpham";
$password = "Cpsc3300Fpham!";
$dbname = "ll_fpham";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if(!$conn) {
    die("Connection failed: ".mysqli_connec_error());
}
echo "Connection successfully";

?>