<?php
session_start();
$uid= $_SESSION['current_user']['userid']; 
$img_name= $uid.".png";
$img="";
 
if(file_exists($img_name)){
  $img=$img_name;
}
else {
  $img="../model/media/user.png";
}


?>
<html>
  <img src="<?php echo$img; ?>" alt="">
</html>