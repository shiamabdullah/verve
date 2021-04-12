<?php 
require_once('../model/admin/adminModel.php');
session_start();
 if (isset($_POST['submit']))
 {            
     //print_r( $_SESSION['current_user']);
    $uid=  $_SESSION['current_user']['username'];

     $file_name= $_FILES['file']['name'];
     $file_type= $_FILES['file']['type'];
     $file_size= $_FILES['file']['size'];
     $file_tem_loc= $_FILES['file']['tmp_name'];
     $target_file = '../Assets/AdminPhotos/' . basename($uid."_".$file_name);
     //$target_file = '../Assets/AdminPhotos/' . basename($uid.".png");

     if (empty($file_name) or empty($file_type) or empty($file_size) or empty($file_tem_loc)  ){
        echo "null";
     }
 
     else if ( ( strpos($file_type, 'jpeg')!== false or str_contains($file_type, 'png') or str_contains($file_type, 'jpg'))!=true )
     {
         echo'enter a valid img file  jpeg or jpg or png ';
     }
     else if ((floatval($file_size)/1000)>=4096)
     {
         echo 'file is greater than 4mb';
 
     }
 
     else{
    if (is_uploaded_file($_FILES['file']['tmp_name']))
    {       
         move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
         echo "uploaded";
         //echo $target_file;
        uploadPhotoAdmin($target_file,$uid);
         //header('location: ../view/homeAdmin.php');
         
    }
   else {
  echo "not uploaded";  }     
}    

  }


?>