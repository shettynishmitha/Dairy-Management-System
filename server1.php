<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection, "dairy management system"); // Selecting Database from Server
$username = $_POST['Username'];
$password = $_POST['Password'];
$useraccess = $_POST['usertype'];
            if (isset($_POST['reg_user'])) {
            $query=mysqli_query($connection,"SELECT * FROM `user` WHERE userid='$username' AND password='$password' AND type='$useraccess'") or die(mysqli_error($db));
            $row=mysqli_fetch_array($query);

                
				if ($row['type'] == 'admin'){
                header("location:index.html");
                        }
                        elseif ($row['type'] == 'user') {
                       header("location:index.html");
                        }
						
				
            else
            {
                echo '<h3 style="color: black; text-align: center;">INVALID USERNAME OR PASSWORD</h3>';
			}
            }
?>