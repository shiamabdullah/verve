<?php ;
$title='Search Products';
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
        <h2>Search Products</h2>
    </center>

    
  <div id="searchbar">
    <label>Search</label>
   <input type="text" id="searchProduct" placeholder="Product Name" >

  </div>
  
	<table class="data-table" border="2" align="center" cellpadding="10" width="auto">
  <thead>
  <tr>
			<td>ID</td>
			<td>NAME</td>
            <td>Category</td>
            <td>Sub Category</td>
            <td>Buying Price<br></td>
            <td>Selling Price<br></td>
            <td>Stock<br></td>
            <td>Displayable </td>
            <td>Add Discount </td>
         

		</tr>
    </thead>      
    <tbody id="searchProductResult">
        <?php $sql = "select * from products";
    	$result = mysqli_query($conn, $sql);
        while ($row=mysqli_fetch_assoc($result)) 
        {
           
            echo 	
            "<tr>
            <td> {$row['pid']} </td>
            <td>{$row['productName']}</td>
            <td> {$row['category']} </td>
            <td>{$row['subCategory']} </td>
            <td> {$row['buyingPrice']} </td>
            <td> {$row['sellingPrice']} </td>
            <td> {$row['stock']} </td>
            <td> {$row['displayable']}</td>
       
           
            
          </tr>	
          ";
}
            ?>
            
        </tbody>
            
            </table>


<?php 
include('footer.php');
 ?>