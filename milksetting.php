<?php include('admin.php') ?>
<!DOCTYPE html>
<html><head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="sindex1.css">
    </head>
        
    
    <body>
         <form method="post" action="milksetting.php">
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
  <br> <br><br><br>  <br><br><br>  <br><br><br>
                <label>Date:</label><br>
                 <input type="date" name="date" id="name" placeholder="Enter Date" required=""><br>
               
                <label>Price/litre:</label><br>
                <input type="number" step="0.01" name="price/litre" id="no" placeholder="Enter Price/Litre" required=""><br>
                
                <input type="Submit" name="msubmit" value="Set" style="width: 75px; height: 25px;">
                <input type="reset" value="Cancel" style="width: 75px; height: 25px;">
                <input type="Submit" name="update" value="Update" style="width: 75px; height: 25px;">
            </form>
    
</body></html>