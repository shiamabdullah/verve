<?php ;
$title='Add Product';
include('sessionheader.php');

?>

<form method="post" action="../controller/addProductCheck.php">
		<fieldset>
			<legend>Add Product</legend>
			<table>
                <tr >
                    <td>Name<br></td>
                    <td>
                        <input type="text" name="name" value="" />
                    </td>
                </tr>
                <tr>
                    <td>Description<br></td>
                    <td>
                        <input type="text" name="description" value="">
                    </td>
                </tr>
               
				<tr>
					<td>Category</td>
					<td><select name="category">
                        <option value="Men">Men</option>
                        <option value="Woman">Woman</option>
                        <option value="Kids">Kids</option>
                        <option value="Others">Others</option>
                        </select>
                        </td>
				</tr>

                <tr>
					<td>Sub Category</td>
					<td><select name="subCategory">
                        <option value="Clothing">Clothing</option>
                        <option value="Shoes">Shoes</option>
                        <option value="Accessories">Accessories</option>
                       
                        </select>
                        </td>
				</tr>
                
               
					<td>
						<input type="submit" name="submit" value="Add"> 
					</td>
				</tr>
			</table>
		</fieldset>
	</form>


<?php 
include('footer.php');
 ?>