<?php
	$title='View Profile';
	include('sessionheader.php');
    $user= $_SESSION['current_user'];

    
?>
	<table width="100%" align="center">    
				<tr>
					<center>
					<h1>Admin Panel</h1>
					</center>
				</tr>  
				<tr>
				<h2> Welcome,  <?php echo $_SESSION['current_user']['username']; ?> </h2> 
				</tr>
    </table>
    
    <table width="100%"  border='1'>
    <thead>
                    <th>
						<center>
						Account
						</center>
                    </th>
                    
                    
                    <th>
                    <center>
						 View Profile
						</center>
                    </th>
    </thead>

    <tbody>
        <td>
            <ul>
                <li><a href="viewprofileAdmin.php"> View Profile</a></li>
                <li><a href="editprofileAdmin.php"> Edit Profile</a></li>
                <li><a href="changephotoAdmin.php"> Change Profile Picture</a></li>
                <li><a href="changepassAdmin.php"> Change Passowrd</a></li>
            </ul>
         </td>

        <td align="center">
            <fieldset style="width:80%">
                        <legend>PROFILE </legend>
                        <table >
                            <tr>
                                <td>Name<br></td>
                                <td >: <?php echo $user['username']; ?></td>
                                <td rowspan="5" width="40px">

                                </td>
                                <td rowspan="4">
                                <img src="../model/media/user.png" width="100" height="100">
                                </td>
                            <tr>
                            <td>Email<br></td>
                                <td>: <?php echo $user['email']; ?></td>
                            </tr>    
                               
                                
                               <tr>
                                    <td>Username<br></td>
                                    <td>: <?php echo $user['userid']; ?></td>
                               </tr>
                               <tr>
                                    <td>Address<br></td>
                                    <td>: <?php echo $user['address']; ?></td>
                               </tr>
                                
                             <tr>
                                    <td>Dob<br></td>
                                    <td>: <?php echo $user['dob']; ?></td>
                                    <td> <a href="changepic.php" > Change Photo</a> </td>
                             </tr>


                        </table>
            </fieldset>
               
                
    </tbody>
                    
                    
    </table>
    

<?php 
include('footer.php');
 ?>