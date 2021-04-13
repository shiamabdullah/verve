<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- <table border="1" width="100%" align="center">
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
    </table> -->

    <div class="menu-bar">
        <ul>
            <li ><img src="../Assets/MabLogo.jpg" height="70px"></li>
            <!-- <li class="active"><a href="viewProCus.php"><i class="fa fa-user"></i>Profile</a></li> -->
            <li class="active"><a href="homeeCus.php"><i class="fa fa-home"></i>Home</a></li>
            <!-- <li><a href="cartCus.php"><i class="fa fa-shopping-cart"></i>MyCart</a></li> -->
            <li><a href="contact.php"><i class="fa fa-compress"></i>Contact</a></li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>
    <table border="1" width="100%" align="center" height="400px">
        <td align="center">
            
            <form method="post" action="../controller/logcheckCus.php">               
                <fieldset style="width:300px">
                    <legend height>Order History</legend>
                    <table height="350px">
                        <tr>
                        <td>Order No</td>
			            <td>Date</td>
			            <td>Price</td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>23.02.2021</td>
                        <td>650.00</td>
                        <td>
                        
                        <a href="delete.php?id=1"> DELETE</a>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>21.04.2021</td>
                        <td>1050.69</td>
                        <td>
                        
                        <a href="delete.php?id=1"> DELETE</a>
                        </td>
                        </tr><tr>
                        <td>3</td>
                        <td>29.03.2021</td>
                        <td>765.25</td>
                        <td>
                        
                        <a href="delete.php?id=1"> DELETE</a>
                        </td>
                        </tr>
                        <tr>
                        <td>4</td>
                        <td>12.04.2021</td>
                        <td>150.00</td>
                        <td>
                        
                        <a href="delete.php?id=1"> DELETE</a>
                        </td>
                        </tr><tr>
                        <td>5</td>
                        <td>12.04.2021</td>
                        <td>720.00</td>
                        <td>
                       
                        <a href="delete.php?id=1"> DELETE</a>
                        </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </td>
        </table>
    <!-- <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright2021@MAB</center></td> 
    </table>  -->
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