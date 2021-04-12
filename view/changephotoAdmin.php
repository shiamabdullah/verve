<?php
	$title='Change Photo';
	include('sessionheader.php');
  $user= $_SESSION['current_user'];
?>



<form action="../controller/uploadphotoAdmin.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input class="btn btn-success" type="file" name="file" id="file">
  <input class="btn btn-success" type="submit" value="Upload Image" name="submit">
</form>


<?php 
include('footer.php');
 ?>