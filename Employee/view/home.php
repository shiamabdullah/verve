<?php
    session_start();
    if(isset($_SESSION['flag'])){
        require_once('../model/userModel.php');
  //  $user = $_SESSION['loggedInUser'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
   </head>
<body>
    <div class="menu-bar">

    
        <ul>
             <li ><img src="../assets/MabLogo.jpg" height="60px" align="left"></li>
             <li class="active"><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
            <li ><a href="aboutUs.html"><i class="fa fa-user"></i> About us</a>
            </li>
            <li><a href="contact.php"><i class="fa fa-phone"></i> Contact</a></li>

             <li><a href="#"><i class="fa fa-cog"></i> Settings</a>
                <div class="sub-menu-1">
                    <ul>
                        <li ><a href="changePass.php"><i class="fa fa-key"></i> Change Password</a></li>
                        <li><a href="editProfile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
                       
                        

                    </ul>
                    

                </div>

             </li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>

    </div>


    <!-- <table width="100%" height="100%" border="1">   
        <tr height='100px' align="left"> -->
            <h3> Welcome <?php echo $_SESSION['username'] ?></h3>

    <!-- </table> -->
    <table border="1" width="100%" height="500px" align="center">
        <tr align="left" >
                <td width="200px">
                <p>
                <ul>
                <li><a href="support.php">Support</a></li>
                <li><a href="productList.php">Poduct List</a></li>
                <li><a href="searchproduct.php">Search Poduct</a></li>
                <li><a href="cusList.php">View Customer's List</a></li>
                <li><a href="searchcus.php">Search Customer</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="searchem.php">Search Employee</a></li>
               </td>
               <td height="300px" align="center">Welcome <?php echo $_SESSION['username'] ?></td>
    </table>
    <div class="menu-bar">
        <ul>
            <li>Copyright2021@MAB</a></li>
        </ul>
    </div>


</body>
</html>
<?php
    }else{
        header('location: ../view/login.html ');
    }
?>




