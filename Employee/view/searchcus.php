<?php
    session_start();
    if(isset($_SESSION['flag'])){
        require_once('../model/userModel.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="searchcus.js"></script>
   </head>
<body>
<div class="menu-bar">
        <ul>
             <li ><img src="../assets/MabLogo.jpg" height="60px" align="left"></li>
             <li class="active"><a href="services.php"><i class="fa fa-clone"></i> Services</a></li>
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

    <div align="center">
    <h1 id='myid'>Search Customer</h1>
    <form>
		<input type="text" name="name" id="name" value="" placeholder="Customer Name" onkeyup="ajax()" />
		<!-- <input type="button" name="" value="click" onclick=""> -->
	</form>
    <div id='result'></div>
    </div>
   
  

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
