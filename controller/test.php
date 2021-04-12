<?php

require_once('../model/admin/adminModel.php');
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

     $user=getUserbyId($_SESSION['current_user']['username']);
     print_r($user);
     echo $user['imgsrc'];

    
?>
<?php 
//echo $_SESSION['current_user']['imgsrc'];
 ?>
<html>
  
   <img src= "<?php echo $user['imgsrc'];?>"></html>

<?php $user=getUserbyId($_SESSION['current_user']['username']);    echo $user['imgsrc'];?>