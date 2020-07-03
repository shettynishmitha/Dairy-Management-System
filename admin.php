<?php

session_start();
// initializing variables
$fat = "";
$degree    = "";
$date ="";
$time ="";
$litre   = "";
$id    = "";
//$type      = "user";se
$errors = array(); 

// connect to the database
$cnnhost = 'localhost';
$cnnuser = 'root';
$cnnpass = '';
$cnn     = 'dairy management system';

$db = mysqli_connect($cnnhost, $cnnuser, $cnnpass, $cnn);

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $id = mysqli_real_escape_string($db, $_POST['userid']);
  $date = mysqli_real_escape_string($db, $_POST['sdate']);
    $time = mysqli_real_escape_string($db, $_POST['stime']);
//$type = mysqli_real_escape_string($db, $_POST['type']);
     $fat = mysqli_real_escape_string($db, $_POST['sfat']);
  $degree = mysqli_real_escape_string($db, $_POST['sdegree']);
  $litre = mysqli_real_escape_string($db, $_POST['slitre']);


  // first check the database to make sure 
  // a user does not already exist with the same phone
  $user_check_query = "SELECT * FROM register WHERE userid='$id' AND user_access='U' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['userid'] === $id) {
      
//encrypt the password before saving in the database

  	$query = "INSERT INTO seller (userid, sdate, stime, sfat, sdegree, slitre) 
  			  VALUES('$id', '$date', '$time', '$fat', '$degree', '$litre')";
  	mysqli_query($db, $query);
  	 $_SESSION['userid'] = $userid;
  	 
  	header('location: selleradmin.php');
  }
  }
    else
    {
     array_push($errors, "UserID doesnot exists");
    }

}





  




if (isset($_POST['bsubmit'])) {
  // receive all input values from the form
  $id = mysqli_real_escape_string($db, $_POST['userid']);
  $date = mysqli_real_escape_string($db, $_POST['bdate']);
    $time = mysqli_real_escape_string($db, $_POST['btime']);
  $litre = mysqli_real_escape_string($db, $_POST['blitre']);
  $user_check_query = "SELECT * FROM register WHERE userid='$id' AND user_access='U' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['userid'] === $id) {
      
//encrypt the password before saving in the database

  	$query = "INSERT INTO buyer (userid, bdate, btime, blitre) 
  			  VALUES('$id', '$date', '$time', '$litre')";
  	mysqli_query($db, $query);
        $_SESSION['userid'] = $userid;
  	
  	header('location: buyeradmin.php');
  }
  }
    else
    {
     array_push($errors, "UserID doesnot exists");
    }

}


if (isset($_POST['stsubmit'])) {
  // receive all input values from the form
  $id = mysqli_real_escape_string($db, $_POST['staffid']);
    
  $name = mysqli_real_escape_string($db, $_POST['stname']);
   $date = mysqli_real_escape_string($db, $_POST['stdate']);
$phone = mysqli_real_escape_string($db, $_POST['stphone']);
    $address = mysqli_real_escape_string($db, $_POST['staddress']);
  $status = mysqli_real_escape_string($db, $_POST['status']);
      $salary = mysqli_real_escape_string($db, $_POST['stsalary']);


 
  	$query = "INSERT INTO staff (staffid, stname, stphone, staddress, status, stsalary,staffbd) VALUES ('$id', '$name', '$phone', '$address', '$status', '$salary','$date')";
  	mysqli_query($db, $query);
  	  $_SESSION['userid'] = $userid;
  	
  	header('location: staffadmin.php');
    
    
  }


if (isset($_POST['msubmit'])) {
  // receive all input values from the form
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $price = mysqli_real_escape_string($db, $_POST['price/litre']);

$query = "INSERT INTO milk VALUES('$date', '$price')";
  	mysqli_query($db, $query);
      $_SESSION['userid'] = $userid;
  	  
    header('location: milksetting.php');
}


if (isset($_POST['mobsubmit'])) {
  // receive all input values from the form
 
    $staffid = mysqli_real_escape_string($db, $_POST['staffid']);
  $mob = mysqli_real_escape_string($db, $_POST['phone']);
  $user_check_query = "SELECT * FROM staff WHERE staffid='$staffid' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['staffid'] === $staffid) {
      
//encrypt the password before saving in the database

  	$query = "UPDATE staff SET stphone='$mob' WHERE staffid='$staffid'";
  	mysqli_query($db, $query);
  	  $_SESSION['userid'] = $userid;
  	  
  	header('location: stmob.php');
  }
  }
    else
    {
     array_push($errors, "Staffid doesnot exists");
    }

}

if (isset($_POST['addsubmit'])) {
  // receive all input values from the form
 
    $staffid = mysqli_real_escape_string($db, $_POST['staffid']);
  $add = mysqli_real_escape_string($db, $_POST['add']);
  $user_check_query = "SELECT * FROM staff WHERE staffid='$staffid' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['staffid'] === $staffid) {
      
//encrypt the password before saving in the database

  	$query = "UPDATE staff SET staddress='$add' WHERE staffid='$staffid'";
  	mysqli_query($db, $query);
  	  $_SESSION['userid'] = $userid;
  	 
  	header('location: stadd.php');
  }
  }
    else
    {
     array_push($errors, "Staffid doesnot exists");
    }

}

if (isset($_POST['statsubmit'])) {
  // receive all input values from the form
 
    $staffid = mysqli_real_escape_string($db, $_POST['staffid']);
  $stat = mysqli_real_escape_string($db, $_POST['stat']);
  $user_check_query = "SELECT * FROM staff WHERE staffid='$staffid' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['staffid'] === $staffid) {
      
//encrypt the password before saving in the database

  	$query = "UPDATE staff SET status='$stat' WHERE staffid='$staffid'";
  	mysqli_query($db, $query);
          $_SESSION['userid'] = $userid;
  	  
  	
  	header('location: status.php');
  }
  }
    else
    {
     array_push($errors, "Staffid doesnot exists");
    }

}

if (isset($_POST['salsubmit'])) {
  // receive all input values from the form
 
    $staffid = mysqli_real_escape_string($db, $_POST['staffid']);
  $sal = mysqli_real_escape_string($db, $_POST['sal']);
  $user_check_query = "SELECT * FROM staff WHERE staffid='$staffid' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['staffid'] === $staffid) {
      
//encrypt the password before saving in the database

  	$query = "UPDATE staff SET stsalary='$sal' WHERE staffid='$staffid'";
  	mysqli_query($db, $query);
          $_SESSION['userid'] = $userid;
  	 
  	
  	header('location: upsalary.php');
  }
  }
    else
    {
     array_push($errors, "Staffid doesnot exists");
    }

}

if (isset($_POST['passsubmit'])) {
  // receive all input values from the form
 
    $id = mysqli_real_escape_string($db, $_POST['userid']);
  $cpass = mysqli_real_escape_string($db, $_POST['cpass']);
    $npass = mysqli_real_escape_string($db, $_POST['npass']);
  $user_check_query = "SELECT * FROM register WHERE userid='$id' AND password='$cpass' AND user_access='A' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['userid'] === $id) {
      


  	$query = "UPDATE register SET password='$npass' WHERE userid='$id'";
  	mysqli_query($db, $query);
          $_SESSION['userid'] = $userid;
  	  
  	
  	header('location: pass.php');
  }
      
      
  }
    else
    {
     array_push($errors, "Invalid Admin UserID");
    }

}

if (isset($_POST['update'])) {
  // receive all input values from the form
 
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $price = mysqli_real_escape_string($db, $_POST['price/litre']);
  $user_check_query = "SELECT * FROM milk WHERE date='$date' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['date'] === $date) {
      
//encrypt the password before saving in the database

  	$query = "UPDATE milk SET price='$price' WHERE date='$date'";
  	mysqli_query($db, $query);
  	  $_SESSION['userid'] = $userid;
  	 
  	header('location: milksetting.php');
  }
  }
    else
    {
     array_push($errors, "Price is not updated");
    }

}


?>


