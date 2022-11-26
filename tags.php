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

$sql = 'SELECT * FROM Tags';
$result = mysqli_query($conn, $sql);

echo"<table border = '1'>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
	echo "<tr>
	<td>Tag_ID</td>
	<td>Tag_Name</td>
	<td>Description</td>
	<tr>";
  while($row = mysqli_fetch_assoc($result)){
    echo 
		"<tr>
		<td>{$row['Tag_ID']}</td>
		<td>{$row['Tag_Name']}</td>
		<td>{$row['Description']}</td>
		<tr>";
  }
} else {
  echo "0 results";
}
echo"</table>";
mysqli_close($conn);
?>