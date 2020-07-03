<?php

session_start();
// initializing variables

$id= "";
// connect to the database
$cnnhost = 'localhost';
$cnnuser = 'root';
$cnnpass = '';
$cnn     = 'dairy management system';

$db = mysqli_connect($cnnhost, $cnnuser, $cnnpass, $cnn);
 if(isset($_GET['staffid']))
 {
     $id=$_GET['staffid'];
     $result="DELETE from staff where staffid='$id'";
     	mysqli_query($db, $result);
        $_SESSION['userid'] = $userid;
        header('location: staff.php');
 
 }
?>