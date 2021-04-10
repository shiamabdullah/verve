<?php ;
$title='Add Product';
include('sessionheader.php');

?>

<form method="post" action="../controller/regCheckAdmin.php">
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
					<td><select name="Color">
                        <option value="Red">Red</option>
                        <option value="Green">Green</option>
                        <option value="Blue">Blue</option>
                        <option value="Pink">Pink</option>
                        <option value="Yellow">Yellow</option
                        </select>
                        </td>
				</tr>

                <tr>
					<td>Sub Category</td>
					<td><select name="Color">
                        <option value="Red">Red</option>
                        <option value="Green">Green</option>
                        <option value="Blue">Blue</option>
                        <option value="Pink">Pink</option>
                        <option value="Yellow">Yellow</option
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