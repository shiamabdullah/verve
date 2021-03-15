<?php
	$title='Home';
	include('sessionheader.php');
?>
	<table width="100%" align="center" border='1'>    
				<tr>
					<center>
					<h1>Admin Panel</h1>
					</center>
					
				</tr>  
				<tr>
				<h2> Welcome,  <?php echo $_SESSION['current_user']['username']; ?> </h2> 
				</tr>
                <tr>
                    <td >
						<center>
						<h3>Account</h3>
						</center>
                        <ul>
                            <li><a href="viewprofileAdmin.php"> View Profile</a></li>
                            <li><a href="editprofileAdmin.php"> Edit Profile</a></li>
                            <li><a href="changephotoAdmin.php"> Change Profile Picture</a></li>
                            <li><a href="changepassAdmin.php"> Change Passowrd</a></li>
                        </ul>
               
                    </td>
               
					<td >
                   		 <center>
						<h3> User Accounts</h3>
						</center>
                        <ul>
                            <li><a href="viewprofile.php"> View Users</a></li>
                            <li><a href="editprofile.php"> Validate Users</a></li>
                        </ul>
               
                    </td>

					<td >
                    	<center>
						<h3> Products</h3>
						</center>
                        <ul>
                            <li><a href="dashboard.php"> Add Product</a></li>
                            <li><a href="vi.php"> View Product</a></li>
                            
                        </ul>
               
                    </td>
                    
                </tr>
     

            </table>

<?php 
include('footer.php');
 ?>