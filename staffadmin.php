<?php include('admin.php') ?>

<!DOCTYPE html>
<html><head>
    <title>mmAdmin</title>
    <link rel="stylesheet" type="text/css" href="sindex1.css">
    </head>
        
    
    <body>
         <form method="post" action="staffadmin.php">
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
             
                <label>Staff-Id:</label><br>
                 <input type="text" name="staffid" id="name" placeholder="Enter StaffId" required=""><br>
                <label>Name:</label><br>
                 <input type="text" name="stname" id="ad" placeholder="Enter Name" required=""><br>
                <label>Date Of Birth</label><br>
                <input type="date" name="stdate" id="no" placeholder="Enter Birthdate" required=""><br>
                <label>Address:</label><br>
                <input type="text" name="staddress" id="no" placeholder="Enter Address" required=""><br>
                <label>Mobile Number:</label><br>
                <input type="tel" name="stphone" id="uid" placeholder="Enter Phone" required=""><br>     
                <label>Status:</label><br>
                <input type="text" name="status" id="pss" placeholder="Enter Status" required=""><br>
                <label>Salary</label><br>
                <input type="number" step="0.01" name="stsalary" id="pass" placeholder="Enter Salary" required=""><br>
                 
                <input type="Submit" name="stsubmit" value="Submit" style="width: 75px; height: 25px;">
                <input type="reset" value="Cancel" style="width: 75px; height: 25px;"><br>
             
            </form>
    
</body></html>
