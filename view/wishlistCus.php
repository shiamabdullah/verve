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
            
            <form method="post" action="../controller/logcheckCus.php">               
                <fieldset style="width:320px">
                    <legend height>My WishList</legend>
                    <table height="300px">
                    <tr>
                    <td><b>Product</b></td>
			        <td><b>Price</b></td>
                    </tr>
                    <r>
                    <td>Shirt</td>
                    <td>650.00</td>
                    <td>
                    <a href="edit.php?id=1"> ADD CART</a> |
                    <a href="delete.php?id=1"> DELETE</a>
                    </td>
                    </tr>
                    <tr>
                    <td>Radium</td>
                    <td>99.00</td>
                    <td>
                    <a href="edit.php?id=1"> ADD CART</a> |
                    <a href="delete.php?id=1"> DELETE</a>
                    </td>
                    </tr>
                    <tr>
                    <td>Banana</td>
                    <td>15.00</td>
                    <td>
                    <a href="edit.php?id=1"> ADD CART</a> |
                    <a href="delete.php?id=1"> DELETE</a>
                    </td>
                    </tr>
                    <tr>
                    <td>pant</td>
                    <td>550.00</td>
                    <td>
                    <a href="edit.php?id=1"> ADD CART</a> |
                    <a href="delete.php?id=1"> DELETE</a>
                    </td>
                    </tr>
                    <tr>
                    <td>fan</td>
                    <td>1650.00</td>
                    <td>
                    <a href="edit.php?id=1"> ADD CART</a> |
                    <a href="delete.php?id=1"> DELETE</a>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <input type="submit" name="submit" value="ADD All CART">
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