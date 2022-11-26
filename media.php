<?php
$servername = 'cssql.seattleu.edu';
$username = '';
$password = '';
$dbname = 'll_knguyen6';
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully.<br>";

$sql = 'SELECT * FROM Media';
$result = mysqli_query($conn, $sql);

echo"<table border = '1'>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
	echo "<tr>
	<td>Media_ID</td>
	<td>User_ID</td>
	<td>Length</td>
	<td>Width</td>
	<td>Media_type</td>
	<tr>";
  while($row = mysqli_fetch_assoc($result)){
    echo 
		"<tr>
		<td>{$row['Media_ID']}</td>
		<td>{$row['User_ID']}</td>
		<td>{$row['Length']}</td>
		<td>{$row['Width']}</td>
		<td>{$row['Media_Type']}</td>
		<tr>";
  }
} else {
  echo "0 results";
}
echo"</table>";
mysqli_close($conn);
?>
