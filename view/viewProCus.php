<?php
	session_start();
   // require_once('../model/userModel.php');
	if(isset($_SESSION['flag'])){
    require_once('../model/userModel.php');
    }else{
		header('location: ../view/login.php ');
	}
    // $email = "shahil123@gmail.com";
    // echo base64_encode($email)
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
                    <a href="editProCus.php"> Edit Profile</a> |
                    <a href="orderCus.php">Oredr History</a> |
                    <a href="contact.php"> Contact</a> |
                    <a href="../controller/logout.php">Logout</a> 			
                </h4>
            </td>
        </tr>
    </table>
    
 
    <table border="1" width="100%" align="center" height="400px">
    
        <td align="center">  
        
                       <table height="200px">
                       <?php 
                                $users = getUserInformation($_SESSION["username"]);
                                foreach($users as $user){
                                    echo "<tr>
                                    <td>User Name:{$user["name"]}</td>
                                </tr>
                                <tr>
                                    <td>Email :  {$user["email"]} </td>
                                </tr>
                                <tr>
                                    <td>Gender :  {$user['gender']} </td>
                                </tr>
                                <tr>
                                    <td>DOB :   {$user['dob']} </td>
                                </tr>"; 
                                }
                                ?>
                       
                    </table>
                </td>
    </table>
    
    

    <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright2021@MAB</center></td> 
    </table> 
    
</body>
</html>
