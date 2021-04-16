<?php ;
$title='View Products';
include('sessionheader.php');
require_once('../model/admin/productModel.php');
$product=fetchProduct($_GET['pid']);
?>
<style>
img {
  border-radius: 8px;
}
</style>
<center>
    <h2>
        Added Product View
    </h2>
</center>
<table  cellpadding=8 align="center">
                
                <tr>
                    <td>Name<br></td>
                    <td>
                        <input type="text" name="productName" value=" <?php echo $product['productName']; ?>" required>
                    </td>
                </tr>

                <tr>
					<td>Category</td>
					    <td>
                        <input type="text" name="productName" value=" <?php echo $product['category']; ?>" required>

                        </td>
				</tr>

                <tr>
					<td>Sub Category</td>
                    <td>
                    <input type="text" name="productName" value=" <?php echo $product['subCategory']; ?>" required>

                        </td>
				</tr>

                <tr>
                    <td>Description<br></td>
                    
					<td>
                    <input type="text" name="productName" value=" <?php echo $product['description']; ?>" required>
                    </td>
                </tr>

                <tr>
                    <td>Buying Price<br></td>
                    <td>
                    <input type="text" name="productName" value=" <?php echo $product['buyingPrice']; ?>" required>
                    </td>
                </tr>

                <tr>
                    <td>Selling Price<br></td>
                    <td>
                    <input type="text" name="productName" value=" <?php echo $product['sellingPrice']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Stock<br></td>
                    <td>
                    <input type="text" name="productName" value=" <?php echo $product['stock']; ?>" required>
                    </td>
                </tr>

                    <tr>
					<td>Displayable </td>

					<td>
                    <input type="text" name="productName" value=" <?php echo $product['displayable']; ?>" required>

                        
					</td>
					</tr>
               
                

                    <tr>
                    <td>
                    photo 1:
                    </td>
                    <td>
                    <img src="<?php echo $product['photo1']; ?>"" width="300" height="300">

                    </td>
                    </tr>

                    <tr>
                    <td>
                    photo 2:
                    </td>
                    <td>
                    <img src="<?php echo $product['photo2']; ?>"" width="300" height="300">
                    </td>
                    </tr>

                    <tr>
                    <td>
                    photo 1:
                    </td>
                    <td>
                    <img src="<?php echo $product['photo3']; ?>"" width="300" height="300">
                    </td>
                    </tr>
                  
                <tr>
                <td>

                </td>
                <td>
                    <?php echo "<a class=\"btn btn-success\" href=\"viewProductAdmin.php\" role=\"button\">View All Products</a>";
                     ?>                     
                </td>
				</tr>
			</table>


<?php 
include('footer.php');
 ?>