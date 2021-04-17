<?php ;
$title='Add Product';
include('sessionheader.php');

?>

<form method="post" action="../controller/addProductCheckAdmin.php" enctype="multipart/form-data">
			<center><legend>Add Product</legend></center>
			<table cellpadding=8 align="center">
                
                <tr>
                    <td>Name<br></td>
                    <td>
                        <input type="text" name="productName" value="" required>
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

                <tr>
                    <td>Description<br></td>
                    <td 
					<td> <textarea rows="6" cols="25" <input type="text" name="description" value="" placeholder= "Enter your description" required></textarea>
                    </td>
                </tr>

                <tr>
                    <td>Buying Price<br></td>
                    <td>
                        <input type="text" name="buyingPrice" value="" required>
                    </td>
                </tr>

                <tr>
                    <td>Selling Price<br></td>
                    <td>
                        <input type="text" name="sellingPrice" value="" required>
                    </td>
                </tr>
                <tr>
                    <td>Stock<br></td>
                    <td>
                        <input type="text" name="stock" value="" required>
                    </td>
                </tr>

                    <tr>
					<td>Displayable </td>

					<td>
						<input type="radio" name="displayable" value="1"> Yes |
						<input type="radio" name="displayable" value="0"> No
                        
					</td>
					</tr>
                    <!-- <tr>
                        <td>
                        </td>
                        <td>
                        <img src="../Assets/AdminPhotos/dummy.png" id="previewImg" width="200px">
                        <img src="../Assets/AdminPhotos/dummy.png" id="previewImg2" width="200px">
                        <img src="../Assets/AdminPhotos/dummy.png" id="previewImg3" width="200px">

                        </td>
                    </tr> -->
                    <tr>
                    <td>
                    photo 1:
                    </td>
                    <td>
                      <img src="../Assets/AdminPhotos/dummy.png" id="previewImg" width="150px">

                     <input class="btn btn-success" type="file" name="file" id="file" onchange="document.getElementById('previewImg').src = window.URL.createObjectURL(this.files[0])">
                    </td>

                    </tr>
                        
                    <tr>
                    
                    <td>
                    photo 2:
                    </td>
                    <td>
                    <img src="../Assets/AdminPhotos/dummy.png" id="previewImg2" width="150px">
                     <input class="btn btn-success" type="file" name="file2" id="file2" onchange="document.getElementById('previewImg2').src = window.URL.createObjectURL(this.files[0])">
                    </td>
                    </tr>

                    <tr>
                    <td>
                    photo 3:
                    </td>
                    <td>
                    <img src="../Assets/AdminPhotos/dummy.png" id="previewImg3" width="150px">
                     <input class="btn btn-success" type="file" name="file3" id="file3" onchange="document.getElementById('previewImg3').src = window.URL.createObjectURL(this.files[0])">
                    </td>
                    </tr>
                  
                <tr>

                <td>
                    <input class="btn btn-success" type="submit" name="submit" value="Add"> 
                </td>
				</tr>
			</table>
	</form>
 

<?php 
include('footer.php');
 ?>