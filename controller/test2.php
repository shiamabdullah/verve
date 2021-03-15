<?php
session_start();
$uid= $_SESSION['current_user']['userid']; 
$img_name="../Assets/AdminPhotos/"."abc".".png";
$img="";

if(file_exists($img_name)){
  $img=$img_name;
}
else {
  $img="../model/media/user.png";
}

echo $img;

?>
