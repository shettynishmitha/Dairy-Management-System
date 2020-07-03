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
         <form method="post" action="staff.php" style="margin: 0;">
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
<input type="text" name="usearch" id="sub" class="search" placeholder="Enter StaffID" required="">
<a href="staff.php"><input type="submit" name="submit" class="submit" value="search" style="width: 75px; height: 28px;"></a>
<table border="1px" style="600px;line-height:40px;">
    
            <tr>
                 <th>StaffID</th>
                 <th>Name</th>
                <th>Age</th>
                 <th>Address</th>
                 <th>Mobile Number</th>
                 <th>Status</th>
                
                <th>Delete</th>
                
    </tr>
                         
             <?php


// initializing variables
$search = "";
    $delete= "Delete";
// connect to the database
$cnnhost = 'localhost';
$cnnuser = 'root';
$cnnpass = '';
$cnn     = 'dairy management system';

$db = mysqli_connect($cnnhost, $cnnuser, $cnnpass, $cnn);

// REGISTER USER
    if (!isset($_POST['submit'])) {
     $query1 = "SELECT s.staffid,stname,staddress,stphone,status,a.age from staff s,age a where a.staffid=s.staffid";
  	$results1 = mysqli_query($db, $query1);
  	if (mysqli_num_rows($results1) > 0) {
  	  while( $row = mysqli_fetch_assoc($results1)){
  	  echo "<tr>";
echo '<td>' . $row['staffid'] . '</td>';
echo '<td>' . $row['stname'] . '</td>';
echo '<td>' . $row['age'] . '</td>';
          echo '<td>' . $row['staddress'] . '</td>';
echo '<td>' . $row['stphone'] . '</td>';
 echo '<td>' . $row['status'] . '</td>';
 
          
echo '<td><a href="stdelete.php?staffid='. $row['staffid'] . '">Delete</td>';
echo "</tr>";
  	}
    echo "</table>";
}
else
{
    echo "0 results";
}
    }
    
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $search = mysqli_real_escape_string($db, $_POST['usearch']);
    $query = "SELECT s.staffid,stname,staddress,stphone,status,a.age from staff s,age a where a.staffid=s.staffid and s.staffid='$search'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) > 0) {
  	  while( $row = mysqli_fetch_assoc($results)){
  	// echo "<tr><td>".$row["staffid"]."</td><td>".$row["stname"]."</td><td>".$row["staddress"]."</td><td>".$row["stphone"]."</td><td>".$row["status"]."</td><td>".$row["age"]."</td></tr>";
          
          
          echo "<tr>";
echo '<td>' . $row['staffid'] . '</td>';
echo '<td>' . $row['stname'] . '</td>';
  echo '<td>' . $row['age'] . '</td>';
echo '<td>' . $row['staddress'] . '</td>';
echo '<td>' . $row['stphone'] . '</td>';
 echo '<td>' . $row['status'] . '</td>';
 
echo '<td><a href="stdelete.php?staffid='. $row['staffid'] . '">Delete</td>';
echo "</tr>";
  	}
    echo "</table>";
}
else
{
    echo "0 results";
}
}
?></table>
        </form>
    
</body></html>