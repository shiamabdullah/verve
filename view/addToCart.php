<?php
    require_once('../model/userModel.php');
    if(isset($_POST['username'])){
       $result = addToCart($_POST['username'],$_POST['pid']);
       echo $result;
    }

?>