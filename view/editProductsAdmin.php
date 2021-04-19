<?php ;
$title='Edit Products';
include('sessionheader.php');
require_once('../model/admin/db.php');
require_once('../model/admin/productModel.php');
$conn = getConnection();

?>

<style>
table, th, td {
  
  border-collapse: collapse;
}


</style>
	  
  <div id="searchbar">
    <label>Search</label>
   <input type="text" id="editProduct" placeholder="Product Name" >

  </div>
	<center>
        <h2>Edit Products</h2>
    </center>
	<table class="data-table" border="2" align="center" cellpadding="8" width="auto">
  <thead>
  <tr>
			<td>ID</td>
			<td>NAME</td>
            <td>Category</td>
            <td>Sub Category</td>
            <td>Description<br></td>
            <td>Buying Price<br></td>
            <td>Selling Price<br></td>
            <td>Stock<br></td>
            <td>Displayable </td>
            <td>Discount </td>
            <td>Action </td>
            <!-- <td>img1 </td>
            <td>img2 </td>
            <td>img3 </td> -->

		</tr>
    </thead>      
    <tbody id="editProductResult">
        <?php $sql = "select * from products";
    	$result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result))
        {   
            ?>
              <tr>
              <td><?php echo $row['pid']; ?></td>
                <td><?php echo $row['productName']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['subCategory']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['buyingPrice']; ?></td>
                <td><?php echo $row['sellingPrice']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td><?php echo $row['displayable']; ?></td>
                <td><?php echo $row['discount']; ?></td>
                 <!-- <td><img src="<?php echo $row['photo1']; ?>" width="150px" height="150px"></td>
                <td><img src="<?php echo $row['photo2']; ?>" width="150px" height="150px"></td>
                <td><img src="<?php echo $row['photo3']; ?>" width="150px" height="150px"></td> -->
                <td>
                <a class=<?php echo"\"btn btn-success\" href=\"../view/editProductAdmin.php?id={$row['pid']}\" role=\"button\">Edit"; ?></a>


                </td>
              </tr>	
            <?php
            }
            ?></tbody>
            
            </table>


<?php 
include('footer.php');
 ?>