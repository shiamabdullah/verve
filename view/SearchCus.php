<?php
	session_start();
	if(isset($_SESSION['flag'])){
        require_once('../model/userModel.php');
       // $user=($_SESSION["username"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="menu-bar">
        <ul>
            <li ><img src="../Assets/MabLogo.jpg" height="70px"></li>
            <li class="active"><a href="homeeCus.php"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="viewProCus.php"><i class="fa fa-user"></i>Profile</a></li>
            <li><a href="contact.php"><i class="fa fa-compress"></i>Contact</a></li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>
    <div id="searchbar">
    <label>Search Product: </label>
   <input type="text" id="searchProduct" placeholder="Product Name" >

  </div>
  
	<table class="data-table" border="2" align="center" cellpadding="10" width="auto">
    <tr>
			<td>ID</td>
			<td>NAME</td>
            <td>Category</td>
            <td>Selling Price<br></td>
            <td>Stock<br></td>
	</tr>
    <tbody id="searchProductResult">
        <?php 
        $conn=getConnection();
        $sql = "select * from products";
    	$result = mysqli_query($conn, $sql);
        while ($row=mysqli_fetch_assoc($result)) 
        { 
            echo 	
            "<tr>
            <td> {$row['pid']} </td>
            <td>{$row['productName']}</td>
            <td> {$row['category']} </td>
            <td> {$row['sellingPrice']} </td>
            <td> {$row['stock']} </td>   
          </tr>	
          ";
        }
            ?>
            
        </tbody>
            
            </table>
    <!-- <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright2021@MAB</center></td> 
    </table> 
     -->
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