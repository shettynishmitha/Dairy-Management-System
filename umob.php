<?php include('useredit.php') ?>
<!DOCTYPE html>

<html><head>
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="sindex1.css">

    </head>
        
    
    <body style="background: url('m.jpeg') no-repeat;
   background-size:cover;font-family: sans-serif;border:none;margin: none;">
         <form method="post" action="umob.php" style="margin: 0;">
    <ul>
    <li><a href="usold.php">Milk Sold Details</a>
       
     </li>
    <li><a href="bsold.php">Milk Bought Details</a>
        
     </li>
    <li><a href="usalary.php">Payment</a>
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




<br> <br><br><br>  <br><br><br>  <br><br><br>
              <?php include('errors.php'); ?>
               <label>Enter current mobile number:</label><br>
                 <input type="tel" name="fphone" id="ad" placeholder="Enter Mobile Number" required=""><br>
                <label>Enter new mobile number:</label><br>
                 <input type="tel" name="lphone" id="ad" placeholder="Enter Mobile Number" required=""><br>
                
                 
                <input type="Submit" name="mobsubmit" value="Submit" style="width: 75px; height: 25px;">
                <input type="reset" value="Cancel" style="width: 75px; height: 25px;"><br>
            
            </form>
    
</body></html>