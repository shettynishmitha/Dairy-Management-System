<?php
session_start();

// initializing variables
$name = "";
$address    = "";
$phone   = "";
$userid    = "";
//$type      = "user";
$errors = array(); 

// connect to the database
$cnnhost = 'localhost';
$cnnuser = 'root';
$cnnpass = '';
$cnn     = 'dairy management system';

$db = mysqli_connect($cnnhost, $cnnuser, $cnnpass, $cnn);

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
//$type = mysqli_real_escape_string($db, $_POST['type']);
     $userid = mysqli_real_escape_string($db, $_POST['userid']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same phone
  $user_check_query = "SELECT * FROM register WHERE phone='$phone' OR userid='$userid'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['userid'] === $userid) {
      array_push($errors, "UserID already exists");
    }

    if ($user['phone'] === $phone) {
      array_push($errors, "Phone Number already exists");
    }
  }

 
  if (count($errors) == 0) {


  	$query = "INSERT INTO register (name, address, phone, user_access, userid, password) 
  			  VALUES('$name', '$address', '$phone', 'U', '$userid', '$password_1')";
  	mysqli_query($db, $query);
  	   $_SESSION['userid'] = $userid;
  	header('location: login.php');
  }
}

//Login
if (isset($_POST['login_user'])) {
  $userid = mysqli_real_escape_string($db, $_POST['userid']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($userid)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	
  	$query = "SELECT * FROM register WHERE userid='$userid' AND password='$password' AND user_access='A'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
          $_SESSION['userid'] = $userid;
  	  
  	  
  	  header('location: adminpage.php');
  	}
      $query2 = "SELECT * FROM register WHERE userid='$userid' AND password='$password' AND user_access='U'";
  	$results2 = mysqli_query($db, $query2);
  	if (mysqli_num_rows($results2) == 1) {
         $_SESSION['userid'] = $userid;
  	    
  	  
  	  header('location: userpage.php');
  	}
      
      else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
 

