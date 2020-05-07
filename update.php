<?php
$conn = new mysqli('localhost','root','','firstdatabase','3308');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE sample_table SET fname= '".$_GET['fname_update']."'"

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
include 'print.php';
$conn->close();
?>