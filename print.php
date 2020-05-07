<html>

<style>
table, th , td  {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd) {
  background-color: #c1adea;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>

<body>
<?php 

$conn = new mysqli('localhost','root','','firstdatabase','3308'); 
$query = "SELECT * FROM sample_table";

 
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Age</font> </td> 
   
      </tr>';
 
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["fname"];
        $field2name = $row["age"];
      
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>