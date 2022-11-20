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
$result = mysqli_query($conn, $sql);
    
if(mysqli_num_rows($result) > 0){

    //make table here

    //print column names first
    
    //print rest of rows.

} else {

    echo "0 results";

}

mysqli_free_result($result);
mysqli_close($conn);

?>
