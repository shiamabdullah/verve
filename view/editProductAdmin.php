<?php ;
$title='Add Product';
include('sessionheader.php');
require_once('../model/admin/productModel.php');
$product = fetchProduct($_GET['id']);
//print_r($product);
?>

<form method="post" action="../controller/updateProductAdmin.php"">
			<center><legend>Edit Product</legend></center>
			<table cellpadding=8 align="center">
                <tr>
                    <td>ID<br></td>
                    <td>
                        <input type="text" name="pid" value="<?php echo $product['pid'];?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Name<br></td>
                    <td>
                        <input type="text" name="productName" value="<?php echo $product['productName'];?>" required>
                    </td>
                </tr>

                <tr>
                    <td>Description<br></td>
                    <td 
					<td> <textarea rows="6" cols="25" <input type="text" name="description" value="<?php echo $product['description'];?>" placeholder= "Enter your description" required></textarea>
                    </td>
                </tr>

                <tr>
                    <td>Buying Price<br></td>
                    <td>
                        <input type="text" name="buyingPrice" value="<?php echo $product['buyingPrice'];?>" required>
                    </td>
                </tr>

                <tr>
                    <td>Selling Price<br></td>
                    <td>
                        <input type="text" name="sellingPrice" value="<?php echo $product['sellingPrice'];?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Stock<br></td>
                    <td>
                        <input type="text" name="stock" value="<?php echo $product['stock'];?>" required>
                    </td>

                </tr>
                <tr>
                <td>Discount<br></td>
                    <td>
                        <input type="text" name="discount" value="<?php echo $product['discount'];?>" required>
                    </td>
                </tr>

                    <tr>
				
                    </tr>

                <td>
                    <input class="btn btn-success" type="submit" name="edit" value="Edit"> 
                </td>
				</tr>
			</table>
	</form>
 

<?php 
include('footer.php');
 ?>