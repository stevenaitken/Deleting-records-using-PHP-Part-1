<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
    <meta name="description" content="A short description of the web page purpose/ intent">
    <meta name="author" content="Author's name 2021">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/master.css" rel="stylesheet" type="text/css">
    <title>Delete Records</title>
<style>

.deleteKey{	color:#FF0004;}

</style>
<meta charset="utf-8">
<title>View all email records</title>
</head>

<body>

<table>
<th>ID</th><th>Firstname</th><th>Lastname</th><th>Action</th>


<?php
include('includes/dbconx.php'); 
include('includes/errors.php'); 
$sql =  "SELECT id, firstname, lastname FROM players";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   // print_r($row); // add this to view array
  echo '<tr>';
 echo '<td>'.$row['id'].'</td>';
  echo '<td>'.$row['firstname'].'</td>';
  echo '<td>'.$row['lastname'].'</td>';

  
  echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";


  //echo "<td>"."<a href='#'". "onmouseup='confirm('Are you sure?');'>"."Delete</a></td>";
  //echo '<td><a href = "delete.php?id='.$row['id'].'"  class="deleteKey" onclick="return confirm(\'Are you sure you want to delete this record ?\')">Delete</a></td>';
   // echo '<td><a href = "delete.php?id='.$row['id'].'"  class="deleteKey" onclick="return confirm(\'Are you sure you want to delete record '.$row['id'].'	 ?\')">Delete</a></td>';

echo '</tr>';
  }
}
  $conn->close();

?>
</table>
</body>
</html>
