<?php
    require_once('../model/userModel.php');
    if(isset($_POST['username'])){
       $result = addToWish($_POST['username'],$_POST['pid']);
       echo $result;
    }

?>