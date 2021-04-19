<?php ;
   require_once('../model/admin/db.php');
   $conn = getConnection();
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }
	if(isset($_POST['edit'])){


        $productName = trim($_POST['productName']," ");
        $pid = trim($_POST['pid']," ");
        $description = $_POST['description'];
        $buyingPrice = trim($_POST['buyingPrice']," ");  // Storing Selected Value In Variable
        $sellingPrice = trim($_POST['sellingPrice']," ");  // Storing Selected Value In Variable
        $stock = trim($_POST['stock']," ");  // Storing Selected Value In Variable
        $discount = trim($_POST['discount']," ");  // Storing Selected Value In Variable
        $sql="UPDATE `products` SET `productName` = '$productName', `description` = '$description', `buyingPrice` = '$buyingPrice',`stock` = '$stock', `sellingPrice` = '$sellingPrice', `discount` = '$discount' WHERE `products`.`pid` =  '$pid';";

        $result = mysqli_query($conn, $sql);
        echo($result);
        if ($result==1){
            $_SESSION['stat']="Edited Product";
            $_SESSION['stat_code']="success";
            header('location: ../view/editProductsAdmin.php');
            //echo    " <a href=\"../view/editEmployeesAdmin.php\"> View Updated list </a> "; 
    }
      
       
       
           
            
        

        }
		

    

?>