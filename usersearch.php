<?php
session_start();

// initializing variables
$search = "";
// connect to the database
$cnnhost = 'localhost';
$cnnuser = 'root';
$cnnpass = '';
$cnn     = 'dairy management system';

$db = mysqli_connect($cnnhost, $cnnuser, $cnnpasss, $cnn);

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $search = mysqli_real_escape_string($db, $_POST['usearch']);
    $query = "SELECT userid,name,address,phone from register where userid='$search' AND user_access='U'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) > 0) {
  	  while( $row = mysqli_fetch_assoc($results)){
  	  echo "<tr><td>".$row["userid"]."</td><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["phone"]."</td></tr>";
  	}
    echo "</table>";
}
else
{
    echo "0 results";
}
}
?>