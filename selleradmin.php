<?php include('admin.php') ?>
<html><head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="sindex1.css">
    </head>
        
    
    <body>
         <form method="post" action="selleradmin.php">
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
             <?php include('errors.php'); ?>
                <label>UserID:</label><br>
                 <input type="text" name="userid" id="name" placeholder="Enter UserId" required=""><br>
                <label>Date:</label><br>
                 <input type="date" name="sdate" id="ad" placeholder="Enter Date" required=""><br>
                <label>Time:</label><br>
                <input type="time" name="stime" id="no" placeholder="Enter Time" required=""><br>
                <label>Fat:</label><br>
                <input type="number" min="3.5" step="0.01" name="sfat" id="uid" placeholder="Enter Fat" required=""><br>     
                <label>Degree:</label><br>
                <input type="number" min="29" step="0.01" name="sdegree" id="pss" placeholder="Enter Degree" required=""><br>
                <label>Litre:</label><br>
                <input type="number" step="0.01" name="slitre" id="pass" placeholder="Enter Litre" required=""><br>
                 
                <input type="Submit" name="submit" value="Submit" style="width: 75px; height: 25px;">
                <input type="reset" value="Cancel" style="width: 75px; height: 25px;"><br>
             
            </form>
    
</body></html>