<?php include('useredit.php') ?>
<!DOCTYPE html>

<html><head>
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="sindex1.css">

    </head>
        
    
    <body style="background: url('m.jpeg') no-repeat;
   background-size:cover;font-family: sans-serif;border:none;margin: none;">
         <form method="post" action="upass.php" style="margin: 0;">
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
        <li><a href="userid.php">UserID</a></li>
        <li><a href="upass.php">Password</a></li>
        
    </ul>
        </li>
        
    <li><a href="logout.php">Logout</a>
    
    </ul>
             
          






<br> <br><br><br>  <br><br><br>  <br><br><br>
              <?php include('errors.php'); ?>
                
                <label>Enter New Userid:</label><br>
                 <input type="text" name="uid" id="name" placeholder="Enter userid" required=""><br>
                
                 
                <input type="Submit" name="usubmit" value="Submit" style="width: 75px; height: 25px;">
                <input type="reset" value="Cancel" style="width: 75px; height: 25px;"><br>
            
            </form>
    
</body></html>