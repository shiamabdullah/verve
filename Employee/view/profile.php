<?php
    session_start();
    if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>
<body>
	
    <div class="menu-bar">
        <ul>
            <li ><img src="../assets/MabLogo.jpg" height="70px" align="left"></li>
            <li ><a href="home.php"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="editProfile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>
        <table border="1" width="100%" align="center" height="400px">
        <td align="center">
        <form method="post" action="../controller/regCheck.php">               
                <fieldset style="width:320px" >
                    <legend>
                        <h3>Profile </h3>
                    </legend>
                    <table align="center" height="400px" > 
                        <tr>
                            <td align="right">
                                <center>Profile Picture</center>
                               <img src="../assets/user.png" width="80px" height="80px">
                           </td>
                        </tr>
                        <tr>
                            <td>User Name:</td>
                            <td><input type="text" name="username" value="<?php echo $_SESSION['username'] ?>"></td>
                        </tr>
                        <tr>   
                            <td>Email:</td>        
                            <td><input type="email" name="email" value="lam@gmail.com"></td>
                        </tr>
                        <tr>
                            <td>Phone:</td>        
                            <td><input type="number" name="number" value="01829339992"></td>
                        </tr>
                        <tr>
                            <td>Position:</td>
                            <td><input type="text" name="position" value="executive"></td>

                         </tr> 
                
                    </table>
                </fieldset>
            </form>
        </td>
        </table>    
       
           
    <div class="menu-bar">
        <ul>
            <li>Copyright2021@MAB</a></li>
        </ul>
    </div>
    
	</table>
</body>
</html>
 <?php
    }else{
        header('location: ../view/login.html ');
    }
?>    