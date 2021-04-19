<?php 
require_once('../model/admin/adminModel.php');
session_start();
 if (isset($_POST['submit']))
 {            
    $uid=  $_SESSION['current_user']['username'];

     $file_name= $_FILES['file']['name'];
     $file_type= $_FILES['file']['type'];
     $file_size= $_FILES['file']['size'];
     $file_tem_loc= $_FILES['file']['tmp_name'];
     $target_file = '../Assets/AdminPhotos/' . basename($uid."_".$file_name);
     //$target_file = '../Assets/AdminPhotos/' . basename($uid.".png");
    
     if (empty($file_name) or empty($file_type) or empty($file_size) or empty($file_tem_loc)  ){
        echo "null";
        $_SESSION['stat']="Not Uploaded Profile Picture";
        $_SESSION['stat_code']="error";
     }
 
     else if ( ( strpos($file_type, 'jpeg')!== false or str_contains($file_type, 'png') or str_contains($file_type, 'jpg'))!=true )
     {   $_SESSION['stat']="Not Uploaded Profile Picture";
         $_SESSION['stat_code']="error";
         echo'enter a valid img file  jpeg or jpg or png ';
     }
     else if ((floatval($file_size)/1000)>=4096)
     {   $_SESSION['stat']="Not Uploaded Profile Picture";
      $_SESSION['stat_code']="error";
         echo 'file is greater than 4mb';
 
     }
 
     else{
    if (is_uploaded_file($_FILES['file']['tmp_name']))
    {       
         move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
         //echo $target_file;
        uploadPhotoAdmin($target_file,$uid);
        $_SESSION['stat']="Uploaded Profile Picture";
        $_SESSION['stat_code']="success";
        header('location: ../view/viewProfileAdmin.php');
         
    }
   else {
    $_SESSION['stat']="Not Uploaded Profile Picture";
    $_SESSION['stat_code']="error";
    echo "not uploaded";  }     
}    

  }


?>