<?php
	$title='Home';
	include('sessionheader.php');
?>

	<table class="table table-borderless success" width=100% align="center" cellpadding="20">    
				<tr>
					<center>
					<h1>Admin Panel</h1>
					</center>
					
				</tr>  
				<tr>
				<h2> Welcome,  <?php echo $_SESSION['current_user']['name']; ?> </h2> 
				</tr>
                <tr>
                    <td>
                        <ul>
                            
                           <li> <h3>Account </h3>

                                <ul>
                                    <li><a href="viewprofileAdmin.php"> View Profile</a></li>
                                    <li><a href="editprofileAdmin.php"> Edit Profile</a></li>
                                    <li><a href="changephotoAdmin.php"> Change Profile Picture</a></li>
                                    <li><a href="changepassAdmin.php"> Change Password</a></li>
                                </ul>
                           </li>
                        </ul>
               
                    </td>
               
					<td>
                   		
                        <ul >
                            <li>
						    <h3> Users </h3>
                               <ul>
                                    <li><a  href="viewUsersAdmin.php"> View Users</a></li>
                                    <li ><a href="editUsersAdmin.php"> Edit Users</a></li>
                                    <li ><a href="searchUsersAdmin.php"> Search Users</a></li>
                                    
                               </ul>
                            </li>
                            
                        </ul>
                        <!-- <ul class="list-group text-center border-0">
                            <li class="list-group-item border-0 "><a class="btn btn-success bg-gradient " href="viewUsersAdmin.php"> View Users</a></li>
                            <li class="list-group-item border-0"><a class="btn btn-success  " href="editUsersAdmin.php"> Edit Users</a></li>
                            <li class="list-group-item border-0"><a class="btn btn-success   "  href="viewEmployeesAdmin.php"> View Employees</a></li>
                            <li class="list-group-item border-0"><a class="btn btn-success  "  href="editEmployeesAdmin.php"> Edit Employees</a></li>
                            
                        </ul> -->
               
                    </td>
                    <td >
                       <ul>
                            <li> <h3>Employees</h3>
                                <ul>
                                    <li><a  href="viewEmployeesAdmin.php"> View Employees</a></li>
                                    <li ><a href="editEmployeesAdmin.php"> Edit Employees</a></li>
                                    <li ><a href="searchEmployeesAdmin.php"> Search Employees</a></li>
                                    
                                </ul>
                            </li>
                       </ul>
                        <!-- <ul class="list-group text-center border-0">
                            <li class="list-group-item border-0 "><a class="btn btn-success bg-gradient " href="viewUsersAdmin.php"> View Users</a></li>
                            <li class="list-group-item border-0"><a class="btn btn-success  " href="editUsersAdmin.php"> Edit Users</a></li>
                            <li class="list-group-item border-0"><a class="btn btn-success   "  href="viewEmployeesAdmin.php"> View Employees</a></li>
                            <li class="list-group-item border-0"><a class="btn btn-success  "  href="editEmployeesAdmin.php"> Edit Employees</a></li>
                            
                        </ul> -->
               
                    </td>

					<td >
                    	
                        <ul>
                            <li><center>
						<h3> Products</h3>
						</center>
                            <ul>
                                <li><a href="addProductAdmin.php"> Add Product</a></li>
                                <li><a href="viewProductAdmin.php"> View Product</a></li>
                                <li><a href="searchProductAdmin.php"> Search Product</a></li>
                            </ul>
                            </li>
                        </ul>
               
                    </td>
                    
                </tr>
     

            </table>

<?php 
include('footer.php');
 ?>