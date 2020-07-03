<?php 
  session_start(); 
   //$_SESSION['userid'] = $userid;

?>
<html><head>
    <title>user</title>
    <link rel="stylesheet" type="text/css" href="sindex1.css">
    </head>
        
    
    <body>
         <form method="post" action="bsold.php">
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
             
             <br><br>
  <br> <br><br><br>  <br><br><br>  <br><br><br>
<input type="date" name="fsearch" id="sub" class="search" placeholder="Enter date1" required="">
 <input type="date" name="lsearch" id="sub" class="search" placeholder="Enter date1" required="">
<a href="bsold.php"><input type="submit" name="submit" class="submit" value="search" style="width: 75px; height: 28px;"></a>
<table border="1px" style="600px;line-height:40px;">
    
            <tr>
                
                 <th>Date</th>
                 <th>Time</th>
                 <th>Litre</th>
                <th>Price/Litre</th>
                 <th>TotalPrice</th>
                
                
    </tr>
                         
             <?php


// initializing variables
$fsearch = "";
$lsearch = "";
// connect to the database
$cnnhost = 'localhost';
$cnnuser = 'root';
$cnnpass = '';
$cnn     = 'dairy management system';

$db = mysqli_connect($cnnhost, $cnnuser, $cnnpass, $cnn);

// REGISTER USER
    if (!isset($_POST['submit'])) {
         $id = mysqli_real_escape_string($db, $_SESSION['userid']);
     $query1 = "SELECT bdate,btime,blitre,price,totalprice from btotalprice where userid='$id'";
  	$results1 = mysqli_query($db, $query1);
  	if (mysqli_num_rows($results1) > 0) {
  	  while( $row = mysqli_fetch_assoc($results1)){
  	  //echo "<tr><td>".$row["userid"]."</td><td>".$row["bdate"]."</td><td>".$row["btime"]."</td><td>".$row["blitre"]."</td><td>".$row["btotalprice"]."</td></tr>";
          echo "<tr>";

echo '<td>' . $row['bdate'] . '</td>';
echo '<td>' . $row['btime'] . '</td>';
echo '<td>' . $row['blitre'] . '</td>';
echo '<td>' . $row['price'] . '</td>';
 echo '<td>' . $row['totalprice'] . '</td>';
//echo '<td><b><font color="#663300"><a href="edit.php?id=' . $row['id'] . '">Edit</a></font></b></td>';

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
    $id = mysqli_real_escape_string($db, $_SESSION['userid']);
  $fsearch = mysqli_real_escape_string($db, $_POST['fsearch']);
    $lsearch = mysqli_real_escape_string($db, $_POST['lsearch']);
    $query = "SELECT bdate,btime,blitre,price,totalprice from btotalprice where userid='$id' AND bdate BETWEEN '$fsearch' AND '$lsearch'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) > 0) {
  	  while( $row = mysqli_fetch_assoc($results)){
  	   //echo "<tr><td>".$row["userid"]."</td><td>".$row["bdate"]."</td><td>".$row["btime"]."</td><td>".$row["blitre"]."</td><td>".$row["btotalprice"]."</td></tr>";
          
           echo "<tr>";

echo '<td>' . $row['bdate'] . '</td>';
echo '<td>' . $row['btime'] . '</td>';
echo '<td>' . $row['blitre'] . '</td>';
          echo '<td>' . $row['price'] . '</td>';
 echo '<td>' . $row['totalprice'] . '</td>';
//echo '<td><b><font color="#663300"><a href="edit.php?id=' . $row['id'] . '">Edit</a></font></b></td>';

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