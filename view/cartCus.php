<?php
	session_start();
	if(isset($_SESSION['flag'])){
        require_once('../model/userModel.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
                    <a href="wishlistCus.php">My WishList</a> |
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
            <li><a href="wishlistCus.php"><i class="fa fa-list"></i>My WishList</a></li>
            <li><a href="contact.php"><i class="fa fa-compress"></i>Contact</a></li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>



    <table border="1" width="100%" align="center" height="400px">
        <td align="center">
            
            <form method="post" action="../controller/logcheckCus.php">               
                <fieldset style="width:320px">
                    <legend height>My Cart</legend>
                    <table height="300px">
                    <tr>
                    <td><u><b>Product</b></u></td>
			        <td><u><b>Price</b></u></td>
                    </tr>
                    <?php
                        $conn=getConnection(); 
                        $sql = "select p.productName as productName,p.sellingPrice as sellingPrice FROM cart as c, products as p where c.productId = p.pid && c.username = '{$_SESSION['username']}'";
                        $result = mysqli_query($conn, $sql);
                        $num=mysqli_num_rows($result);
                        if($num > 0)
                        {
                            $total = 0;
                            while($product=mysqli_fetch_array($result))
                                {
                                    $total += $product['sellingPrice'];
                                ?>

                                <tr>
                                    <td><?php echo $product['productName']; ?></td>
                                    <td><?php echo $product['sellingPrice'];?></td>
                                </tr>

                                <?php
                        }
                         echo "<h3> Total:". $total." BDT</h3>";
                    }   
                        ?>
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