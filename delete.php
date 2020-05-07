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
 
$sql = "DELETE FROM sample_table WHERE fname='".$_GET['name_del']."'";
$sql_1 ="DELETE FROM sample_table WHERE age='".$_GET['age_del']."'";


if (mysqli_query($conn, $sql_1)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

include 'print.php';

mysqli_close($conn);
?>
</body>
</html>