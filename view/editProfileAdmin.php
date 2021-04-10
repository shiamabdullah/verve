<?php
	$title='Edit Profile';
	include('sessionheader.php');
    $user= $_SESSION['current_user'];
    
    //image 
    $uid= $_SESSION['current_user']['userid']; 
    $img_name="../Assets/AdminPhotos/".$uid.".png";
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
    
    <table width="100%"  border='1'>
    <thead>
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
        <form method="post" action="../controller/regCheckAdmin.php">
            <fieldset style="width:80%">
                        <legend>PROFILE </legend>
                        <table >
                            <tr>
                            <td>Name<br></td>
                            <td>
                            <input type="text" name="name" value="" />
                            </td>
            
                            <tr>
                            <td>Email<br></td>
                            <td><input type="email" name="email" value=""></td>
				            </tr>
                            </tr>    

                               <tr>
                                    <td>Address<br></td>
                                    <td><input type="address" name="address" value=""></td>                               </tr>
                                
                             <tr>
                                    <td>Dob<br></td>
                                    <td> <input type="date" name="dob" value="" /> </td> <td >
                                  
                             </tr>


                        </table>
            </fieldset>
        </form>
               
                
    </tbody>
                    
                    
    </table>
    

<?php 
include('footer.php');
 ?>