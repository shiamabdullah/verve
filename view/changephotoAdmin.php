<?php
	$title='Change Photo';
	include('sessionheader.php');
    $user= $_SESSION['current_user'];
?>



<form action="../controller/uploadphotoAdmin.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="file" id="file">
  <input type="submit" value="Upload Image" name="submit">
</form>


<?php 
include('footer.php');
 ?>