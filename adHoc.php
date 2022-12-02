<html>
<body>

<?php
$servername = "cssql.seattleu.edu";
$username = "ll_fpham";
$password = "Cpsc3300Fpham!";
$dbname = "ll_fpham";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed:" .mysqli_connect_error());
}

$sql = $_POST["query"];
$result = mysqli_query($conn, $sql);
$tables = "<table border> = '1'";

$index =  strpos($sql, " ");

$new = substr($_POST["query"], 0, $index);
$select = 'select';
$update = 'update';
$insert = 'insert';
$delete = 'delete';

$new = strtolower($new);
if (strcmp($new, $select) == 0){
    echo "test";
    if(mysqli_num_rows($result) > 0){
        echo "$bcolor";
        echo "$tables";
        while($row = mysqli_fetch_row($result)){
            echo "<tr>\n";
            for($i = 0; $i < mysqli_num_fields($result); $i++){
            echo "<td>".$row[$i]."</td>\n";
            }
            echo "</tr>\n";
        }
        echo "</table>\n";
    }else{
        echo "0 results";
    }
}else if (strcmp($new, $update) == 0){
    echo "$bcolor";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}else if (strcmp($new, $insert) == 0){
    echo "$bcolor";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}else if (strcmp($new, $delete) == 0){
    echo "$bcolor";
    if (mysqli_query($conn, $sql)) {
        echo "Deleted correctly.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}else {
    echo "$bcolor";
    echo "Sorry, please input a query that has select, insert, update, or delete";
}



mysqli_free_result($result);
mysqli_close($conn);
?>

</body>
</html>