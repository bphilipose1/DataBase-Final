<?php
$servername = "cssql.seattleu.edu";
$username = "ll_fpham";
$password = "Cpsc3300Fpham!";
$dbname = "ll_fpham";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully.<br>";

$sql = 'SELECT * FROM Comments';
$result = mysqli_query($conn, $sql);

echo"<table border = '1'>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
	echo "<tr>
	<td>Comment_ID</td>
	<td>Media_ID</td>
	<td>User_ID</td>
	<td>Comment_Content</td>
	<td>Date_Posted</td>
	<tr>";
  while($row = mysqli_fetch_assoc($result)){
    echo 
		"<tr>
		<td>{$row['Comment_ID']}</td>
		<td>{$row['Media_ID']}</td>
		<td>{$row['User_ID']}</td>
		<td>{$row['Comment_Content']}</td>
		<td>{$row['Date_Posted']}</td>
		<tr>";
  }
} else {
  echo "0 results";
}
echo"</table>";
mysqli_close($conn);
?>