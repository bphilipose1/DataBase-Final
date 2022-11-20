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

$sql = "select * from User"; //pull sql request from previous page here
    
if(mysqli_query($conn, $sql)){

    //make table here

} else {

    echo "Error with SQL Query";

}

mysqli_close($conn);

?>
