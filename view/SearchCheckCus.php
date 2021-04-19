<?php>
session_start();
if(isset($_SESSION['flag'])){
require_once('../model/userModel.php');
    $productName=$_POST['productName'];
    $status=searchData($productName);

    echo json_encode($status);
}
?>
    