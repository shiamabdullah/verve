<?php
	session_start();
	if(isset($_SESSION['flag'])){
        require_once('../model/userModel.php');
  //  $user = $_SESSION['loggedInUser'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <table border="1" width="100%" align="center">
        <tr>
            <td colspan="3" height="80px" align="left">
                <img src="../Assets/MabLogo.jpg" height="70px">
            </td>
            <td align="Right">
                <h4>
                    <a href="viewProCus.php">Profile</a> |
                    <a href="cartCus.php">MyCart</a> |
                    <a href="contact.php">Contact</a> |
                    <a href="../controller/logout.php" >Logout</a> 		
                </h4>
            </td>
        </tr>
    </table>

    <table width="100%" border="1">   
        <tr height='100px' align="left">
            <h3> Welcome <?php echo $_SESSION['username'] ?></h3> 
            <?php 
            $products = getAllProduct($_SESSION['username']);
            foreach($products as $product){
                echo "<td>
                <td>
                   Name:{$product["name"]}
              
                
                   Discription :  {$product["discription"]}
                
                
                   Category :  {$product["category"]}
                
                   SubCategory :   {$product["subCategory"]} 
                </td>"; 
                }
                ?>
            
        </tr>
        
        
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
