<?php ;
$title='View Products';
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
	
	<center>
        <h2>View Products</h2>
    </center>
	<table class="data-table" border="2" align="center" cellpadding="10" width="auto">
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
            <td>img1 </td>
            <td>img2 </td>
            <td>img3 </td>

		</tr>
    </thead>      
    <tbody>
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
                 <td><img src="<?php echo $row['photo1']; ?>" width="200px" height="200px"></td>
                <td><img src="<?php echo $row['photo2']; ?>" width="200px" height="200px"></td>
                <td><img src="<?php echo $row['photo3']; ?>" width="200px" height="200px"></td>
              </tr>	
            <?php
            }
            ?></tbody>
            
            </table>


<?php 
include('footer.php');
 ?>