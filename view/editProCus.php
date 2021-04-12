<?php
	session_start();
	if(isset($_SESSION['flag'])){
        require_once('../model/userModel.php');
       // $user=updateUser($_SESSION["username"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <table border="1" width="100%" align="center">
        <tr>
            <td colspan="3" height="80px" align="left">
                <img src="../Assets/MabLogo.jpg" height="70px">
            </td>
            <td align="Right">
                <h4>
                    <a href="homeeCus.php"> Home</a> |
                    <a href="contact.php"> Contact</a> |
                    <a href="../controller/logout.php">Logout</a> 			
                </h4>
            </td>
        </tr>
    </table>
    <table border="1" width="100%" align="center" height="400px">
        <td align="center">
            
        <form method="post" action="../controller/regcheckCus.php">               
                <fieldset style="width:320px" >
                    <legend>
                        <h3>
                            Edit Profile
                        </h3>
                    </legend>
                    <table align="center" height="400px" >
                  
                        <tr>
                            <td>Email <br></td>        
                            <td> :
                            <input type="email" name="email" value=" <?php echo $user["email"] ?>">
                            </td>
                        </tr>
            
                        <tr>
                            <td>User Name<br></td>
                            <td>:<input type="text" name="username" value="<?php echo $users["name"] ?>" readonly/></td>
                        </tr>
                    
                        <!-- <tr>
                            <td>Password</td>        
                            <td>:<input type="password" name="password" value="<?php echo $users['password'] ?>"><br></td>
                        </tr>
            
                        <tr >
                            <td>Confirm Password <br></td>
                            <td>:<input type="password" name="re_password" value="<?php echo $users['password'] ?>"></td>
                        </tr> -->

                        <tr>        
                            <td colspan="2">
                                <fieldset>
                                    <legend>Date of Birth</legend>
                                    <input type="date" name="dob" value="<?php echo $users['dob'] ?>">
                                </fieldset>
                            </td>
                        </tr> 
                        <tr>
                            <td><input type="text" name="gender" value="<?php echo $users['gender'] ?>" hidden></td>
                        </tr>
                        <tr align="right">
                            <td " height=" 50px">
                                <input type="submit" name="submit" value="Update Profile">
                                <input type="reset" name="click" value="reset">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </td>
        </table>
    <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright2021@MAB</center></td> 
    </table> 
    
</body>
</html>
<?php
	}else{
		header('location: ../view/login.html ');
	}
?>