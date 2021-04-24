<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Contact</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  
    <div class="menu-bar">
        <ul>
            <li ><img src="../assets/MabLogo.jpg" height="70px" align="left"></li>
            <li><a href="home.php"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="profile.php"><i class="fa fa-user"></i>Profile</a></li>
            <li><a href="contact.php"><i class="fa fa-phone"></i>Contact</a></li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>

    
    <table border="1" width="100%" align="center" height="400px">
        <td align="center">
            
            <form method="post" action="logcheckCus.php">               
                <fieldset style="width:400px">
                    <legend height>Contact</legend>
                    <table height="100px">
                        <tr><br>
                        <br>
                            <h3>Lamia Sarwar</h3><br>
                            <h4>| MAB Group |</h4> <br>
                            <h5>Phone:01689287712 | Email:lamia@gmail.com </h5>  
                        </tr>
                        
                    </table>
                </fieldset>
            </form>
        </td>
        </table>

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