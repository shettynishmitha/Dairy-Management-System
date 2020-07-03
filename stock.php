
<?php 
  session_start(); 

?>
<!DOCTYPE html>

<html><head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="sindex1.css">

    </head>
        
    
    <body style="background: url('m.jpeg') no-repeat;
   background-size:cover;font-family: sans-serif;border:none;margin: none;">
         <form method="post" action="stock.php" style="margin: 0;">
  <ul>
    <li><a>Account</a>
        <ul>
            <li><a href="selleradmin.php">Seller</a></li>
            <li><a href="buyeradmin.php">Buyer</a></li>
            <li><a href="staffadmin.php">Staff</a></li>
        </ul>
     </li>
    <li><a>Stocks &amp; Details</a>
        <ul>
            <li><a href="milksell.php">Milk Supplied</a></li>
            <li><a href="milkbought.php">Milk Purchased</a> </li>
            <li><a href="staff.php">Staff</a></li>
            <li><a href="stock.php">Stock</a></li>
        </ul>
     </li>
    <li><a href="user.php">Users</a>
     </li>
        <li><a href="stsalary.php">Staff Salary</a>
       
    </li>
     
      <li><a>Edit Staff Details</a>
    <ul>
        <li><a href="stmob.php">Mobile Number</a></li>
        <li><a href="stadd.php">Address</a></li>
        <li><a href="status.php">Status</a></li>
        <li><a href="upsalary.php">Salary</a></li>
    </ul>
        </li>
        
    <li><a>Setting</a>
    <ul>
        <li><a href="milksetting.php">Milk Setting</a></li>
        <li><a href="pass.php">Password</a></li>
    </ul>
        <ul>
        
        <li><a href="logout.php">Logout</a></li>
             </ul>
    </ul>

<br><br>
  <br> <br><br><br>  <br><br><br>  <br><br><br>

<table border="1px" style="600px;line-height:40px;">
    
            <tr>
                 <th>Date</th>
                 <th>Milk Stock</th>
                 
    </tr>
                         
             <?php


// initializing variables
$search = "";
// connect to the database
$cnnhost = 'localhost';
$cnnuser = 'root';
$cnnpass = '';
$cnn     = 'dairy management system';

$db = mysqli_connect($cnnhost, $cnnuser, $cnnpass, $cnn);

// REGISTER USER
    
     $query1 = "CALL `stock`();";
  	$results1 = mysqli_query($db, $query1);
  	if (mysqli_num_rows($results1) > 0) {
  	  while( $row = mysqli_fetch_assoc($results1)){
  	  echo "<tr><td>".$row["sdate"]."</td><td>".$row["stock"]."</td></tr>";
  	}
    echo "</table>";
}
else
{
    echo "0 results";
}
    
    

?></table>
        </form>
    
</body></html>