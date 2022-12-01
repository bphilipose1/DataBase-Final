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

$sql = 'SELECT * FROM Linked_to';
$result = mysqli_query($conn, $sql);

echo"<table border = '1'>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
	echo "<tr>
	<td>Media_ID</td>
	<td>Playlist_ID</td>
	<tr>";
  while($row = mysqli_fetch_assoc($result)){
    echo 
		"<tr>
		<td>{$row['Media_ID']}</td>
		<td>{$row['Playlist_ID']}</td>
		<tr>";
  }
} else {
  echo "0 results";
}
echo"</table>";
mysqli_close($conn);
?>