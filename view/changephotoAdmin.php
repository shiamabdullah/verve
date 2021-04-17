<?php
	$title='Change Photo';
	include('sessionheader.php');
  $user= $_SESSION['current_user'];
?>

<h2 class="text-center">Change Profile Picture</h2>
  
      <div class="d-flex justify-content-center">
        <div class="dis-images">
          <img src="../Assets/AdminPhotos/abc_user.png" id="previewImg">
        </div>         
     </div>
                  
        <div class="d-flex justify-content-center">
          <form action="../controller/uploadphotoAdmin.php" method="post" enctype="multipart/form-data">
          <input class="btn btn-success" type="file" name="file" id="file" onchange="previewFile(this);"> 
          <input class="btn btn-success" type="submit" value="Upload Image" name="submit">
          </form>  
        </div>
  
    
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
</script>

<?php 

include('footer.php');

 ?>