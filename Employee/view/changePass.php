<?php
     session_start();
     require_once('../model/userModel.php');
     if(isset($_SESSION['flag'])){

?>
<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <div class="menu-bar">
        <ul>
            <li ><img src="../assets/MabLogo.jpg" height="70px" align="left"></li>
            <li class="active"><a href="home.php"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="profile.php"><i class="fa fa-user"></i>Profile</a></li>
            <li><a href="contact.php"><i class="fa fa-compress"></i>Contact</a></li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>

        <center>
        <form>
         <fieldset>
         <center><legend>Change Password</legend></center>
         <table align="center"  height="300px">
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
       </center>
      <div class="menu-bar">
        <ul>
            <li class="active">Copyright2021@MAB</a></li>
        </ul>
    </div>
      

</body>
</html>
<?php
     }else{
        header('location: ../view/login.html ');
    }
   
?> 

