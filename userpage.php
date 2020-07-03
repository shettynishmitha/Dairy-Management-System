<?php 
  session_start(); 
   //$_SESSION['userid'] = $userid;

?>
<html><head>
    <title>user</title>
    <link rel="stylesheet" type="text/css" href="sindex1.css">
    </head>
        
    
    <body>
         <form method="post" action="userpage.php">
    <ul>
    <li><a href="usold.php">Milk Sold Details</a>
       
     </li>
    <li><a href="bsold.php">Milk Bought Details</a>
        
     </li>
    <li><a href="usalary.php">Salary</a>
     </li>
        
    
     
      <li><a>Edit Details</a>
    <ul>
        <li><a href="umob.php">Mobile Number</a></li>
        <li><a href="uadd.php">Address</a></li>
        <li><a href="upass.php">Password</a></li>
        
    </ul>
        </li>
        
    <li><a href="logout.php">Logout</a>
    
    </ul>