<?php

session_start();
// initializing variables

//$type      = "user";se
$errors = array(); 

// connect to the database
$cnnhost = 'localhost';
$cnnuser = 'root';
$cnnpass = '';
$cnn     = 'dairy management system';

$db = mysqli_connect($cnnhost, $cnnuser, $cnnpass, $cnn);


if (isset($_POST['mobsubmit'])) {
  // receive all input values from the form
 
    $userid = mysqli_real_escape_string($db, $_SESSION['userid']);
     $mob1 = mysqli_real_escape_string($db, $_POST['fphone']);
  $mob2 = mysqli_real_escape_string($db, $_POST['lphone']);
  $user_check_query = "SELECT * FROM register LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['phone'] === $mob2) {
        
      array_push($errors, "Mobile Number already exists");
    }

      if (count($errors) == 0) {

  	$query = "UPDATE register SET phone='$mob2' WHERE userid='$userid'";
  	mysqli_query($db, $query);
  	  $_SESSION['userid'] = $userid;
  	  
  	header('location: umob.php');
  }
  }
    
}

if (isset($_POST['addsubmit'])) {
  // receive all input values from the form
 
    $userid = mysqli_real_escape_string($db, $_SESSION['userid']);
  $add = mysqli_real_escape_string($db, $_POST['add']);
  $user_check_query = "SELECT * FROM register WHERE userid='$userid' AND user_access='U' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['userid'] === $userid) {
      
//encrypt the password before saving in the database
        
  	$query = "update  register set address='$add' where userid='$userid'";
        
  	mysqli_query($db, $query);
  	  $_SESSION['userid'] = $userid;
  	  
  	header('location: uadd.php');
  }
  }
    
}




if (isset($_POST['passsubmit'])) {
    $userid = mysqli_real_escape_string($db, $_SESSION['userid']);
    $cpass = mysqli_real_escape_string($db, $_POST['cpass']);
    $npass = mysqli_real_escape_string($db, $_POST['npass']);
  $user_check_query = "SELECT * FROM register WHERE userid='$userid' AND password='$cpass' AND user_access='U' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['userid'] === $userid) {
      


  	$query = "UPDATE register SET password='$npass' WHERE userid='$userid'";
  	mysqli_query($db, $query);
          $_SESSION['userid'] = $userid;
  	  
  	
  	header('location: upass.php');
  }
      
      
  }
    else
    {
     array_push($errors, "Renter correct curent password");
    }

}
    



    
?>