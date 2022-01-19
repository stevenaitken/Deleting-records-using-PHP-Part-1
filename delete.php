<?php
 include('includes/errors.php');
$recordID  = $_GET['id'];
echo "Record ID is: ". $recordID;
// connect to the database
 include('includes/dbconx.php');

 if(isset($recordID) || !empty($recordID)){
 $sql =  "DELETE FROM players WHERE id='$recordID'";

if ($conn->query($sql) === TRUE) {
	header("Location: view.php");
  } else {
	echo "Error deleting record: " . $conn->error;
  }
 }
	$conn->close();

?>