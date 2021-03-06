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
        <form method="post" action="../controller/editCheckAdmin.php">
            <fieldset style="width:100%">
                        <legend>PROFILE </legend>
                        <table cellpadding=8>
                            <tr>
                            <td>User Name<br></td>
                            <td>
                                <input type="text" name="username" value="<?php echo$user['username'];?>" onkeyup="validateUsername();" readonly/>
                            </td>
                            </tr>

                            <tr>
                            <td>Name<br></td>
                            <td>
                            <input type="text" name="name" id="name" value="<?php echo$user['name']; ?>" />
                            <br>
					        <span id="nameMsg"> </span>
                            </td>
                            </tr>
                            
                    
                            <tr>
                            <td>Email<br></td>
                            <td><input type="email" name="email" id="email" value="<?php echo$user['email']; ?>" onkeyup="validateEmail();" >
                            <br>
                            <span id="emailMsg"> </span>

                            </td>
				            </tr>

                               <tr>
                                    <td>Address<br></td>
                                    <td><textarea rows="6" cols="25"
                                        <input type="address" name="address" value="<?php echo$user['address']; ?>"> </textarea>     </td>                    </tr>
                                    </tr>
                                <tr>
                                    <td>Gender </td>

                                    <td>
                                        <input type="radio" name="gender" value="Male"> Male
                                        <input type="radio" name="gender" value="Female"> Female
                                        <input type="radio" name="gender" value="Other"> Other
                                    </td>
                                    </tr>
                                <tr>
                             <tr>
                                    <td>Dob<br></td>
                                    <td> <input type="date" name="dob" value="" /> </td> <td >
                                  
                             </tr>

                        <tr>
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
    
	<script src="../view/scriptadmin/signupValidate.js"></script>

<?php 
include('footer.php');
 ?>