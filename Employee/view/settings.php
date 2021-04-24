<?php
     session_start();
     require_once('../model/userModel.php');
     if(isset($_SESSION['flag'])){


?>
<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>
</head>
<body>
    <table border="1" width="100%" align="center">
            <td width="50%" height="50%" align="right"> 
                <img src="../assets/MabLogo.jpg" height="70px" width="70px" align="left">   
                <h4>
                   Logged in as<a href="profile.php"> <?php echo $_SESSION['username'] ?></a>|
                   <a href="../controller/logout.php" height="50px" width="50px">Logout</a>
                </h4>    
            </td>       
    </table>
    
        <form>
         <fieldset>
         <legend>Change Password</legend>
         <table align="center"  height="200px">
          <tr>
            <td>Current Password</td>
            <td>:<input type="Password" name="curr_pass" value=""></td>
            </tr>
            <tr>
            <td>New Password</td>
            <td>:<input type="Password" name="new_pass" value=""></td>
            </tr>
            <td>Retype New Password</td>
            <td>:<input type="Password" name="retype_new_pass" value=""></td>
            </tr>
          <tr><td><input type="submit" name="submit" value="Submit">
          </td></tr>
          </table>
         </fieldset>
       </form>
       <table border="1" width="100%" height="50px" align="center">
        <td align="center">Copyright@MAB</td>
    </table>    

</body>
</html>
<?php
     }else{
        header('location: ../view/login.html ');
    }
   
?> 

