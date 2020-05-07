<html>
<body>
<?php
 
// Create connection
$conn = new mysqli('localhost','root','','firstdatabase','3308');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";
 
// this will select the Database sample_db
//mysqli_select_db($conn,"firstdatabase");
 
echo "\n DB is seleted as Test  successfully";
 
// create INSERT query
 
$sql="INSERT INTO FIRSTDATABASE.sample_table (fname,age) VALUES ('$_POST[fname]','$_POST[age]')";
 

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

include 'print.php';

mysqli_close($conn);
?>


</body>
</html>