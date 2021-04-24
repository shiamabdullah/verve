

<?php 
  require_once('../../model/admin/db.php');
  $conn=getConnection();
  $name = $_REQUEST['name'];


    //$user = $_POST["admin_name"];
    $sql = "SELECT * FROM `user` WHERE `email`='{$name}'";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0)
    {
      echo "⚠️ Email exists";

    }
    else if($name==""){
      echo "⚠️ can not be empty";
    }
 
    else{
      echo "✅ okay";
    }
?>
<?php 
// require_once('../../model/admin/db.php');
// $conn=getConnection();

// if(isset($_POST["user_email"])){
//   $email = $_POST["user_email"];
//   $sql = "SELECT * FROM `user` WHERE `email`='{$email}'";
//   $result=mysqli_query($conn,$sql);
//   echo mysqli_num_rows($result);
// }

?>