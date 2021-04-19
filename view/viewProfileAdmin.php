<?php
	$title='View Profile';
	include('sessionheader.php');
    
    $user= $_SESSION['current_user'];
    
    $userdb=getUserbyId($_SESSION['current_user']['username']);

    //image 
    $username= $_SESSION['current_user']['username']; 
    $img_name=$userdb['imgsrc'];
    $img="";

    if(file_exists($img_name)){
    $img=$img_name;
    }
    else {
    $img="../model/media/user.png";
    }
    
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
    
    <table class="table table-borderless" width="100%" cellpadding="10" >
    <!-- <thead>
                    <th>
						<center>
						<h2>Account</h2>
						</center>
                    </th>
                    
                    
                    <th>
                    <center>
						<h2>View Profile</h2> 
						</center>
                    </th>
    </thead> -->

    <tbody>
    
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
    

        <td align="center">
            <fieldset style="width:100%">
                        <legend>PROFILE </legend>
                        <table cellpadding=8>
                            <tr>
                                <td>Name<br></td>
                                <td >: <?php echo $user['name']; ?></td>
                                <td rowspan="5" width="40px">

                                </td>
                                <td rowspan="4">
                                <img src="<?php echo"$img"; ?>" width="100" height="100">
                                </td>
                            <tr>
                            <td>Email<br></td>
                                <td>: <?php echo $user['email']; ?></td>
                            </tr>    
                               
                                
                               <tr>
                                    <td>Username<br></td>
                                    <td>: <?php echo $user['username']; ?></td>
                               </tr>
                               <tr>
                                    <td>Address<br></td>
                                    <td>: <?php echo $user['address']; ?></td>
                               </tr>
                                
                             <tr>
                                    <td>Dob<br></td>
                                    <td>: <?php echo $user['dob']; ?></td>
                                    <td> <a href="changephotoAdmin.php" > Change Photo</a> </td>
                             </tr>


                        </table>
                        </td>
            </fieldset>
               
                
    </tbody>
                    
                    
    </table>
    

<?php 
include('footer.php');
 ?>