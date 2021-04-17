<?php
	$title='Edit Profile';
	include('sessionheader.php');
    $user= $_SESSION['current_user'];
    
    //image 
    $uid= $_SESSION['current_user']['name']; 
    $img_name="../Assets/AdminPhotos/".$uid.".png";
    $img="";

    if(file_exists($img_name)){
    $img=$img_name;
    }
    else {
    $img="../model/media/user.png";
    }
    
?>
<link rel="stylesheet" href="cssadmin/styles.css"/>

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
    <!-- <thead>
                    <th>
						<center>
						Account
						</center>
                    </th>
                    
                    
                    <th>
                    <center>
						 Edit Profile
						</center>
                    </th>
    </thead> -->

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
        <form method="post" action="../controller/changePassCheckAdmin.php">
            <fieldset style="width:80%">
                        <legend>PROFILE </legend>
                        <table cellpadding=8>
                            <tr>
                            <td>User Name<br></td>
                            <td>
                                <input type="text" name="username" value="<?php echo$user['username'];?>" readonly/>
                            </td>
                            </tr>

                            <tr>
                            <td>Name<br></td>
                            <td>
                            <input type="text" name="name" value="<?php echo$user['name']; ?>" readonly/>
                            </td>
                            </tr>
                            
                    
                            <tr>
                            <td>Previous Password<br></td>
                            <td><input type="password"  id="password" name="previousPassword" value="" required>
                            <br>
					        <span id="passwordMsg"> </span>
					        </td>
				            </tr>

                            <tr>
                            <td>New Password<br></td>
                            <td><input type="password" id="newPass" name="newPassword" value="">
                            <br>
					        <span id="newPassMsg"> </span>
					        </td>
				            </tr>
				            </tr>

                            <tr>
                            <td>Confirm Password<br></td>
                            <td><input type="password" id="conPass" name="confirmPassword" value="">
                            <br>
					        <span id="conPassMsg"> </span>
					        </td>
				            </tr>

                            
                           
                        
                        <td>
                        </td>
                       <td>
                       <input class="btn btn-success" type="submit" name="change" value="Change"> 
                       </td> 
                        </tr>
                        </table>
            </fieldset>
        </form>
               
                
    </tbody>
                    
                    
    </table>
    

<?php 
include('footer.php');
 ?>