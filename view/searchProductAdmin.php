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
   <input type="text" id="searchProduct" placeholder="Product Name" onkeyup="ajax()">

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
            <td>img1 </td>
            <td>img2 </td>
            <td>img3 </td>

		</tr>
    </thead>      
    <tbody id="searchProductResult">
        <?php $sql = "select * from products";
    	$result = mysqli_query($conn, $sql);
        while ($row=mysqli_fetch_assoc($result)) 
        { $img1= "<img src=\"{$row['photo1']}\" width=\"150px\" height=\"150px\">";
         $img2= "<img src=\"{$row['photo2']}\" width=\"150px\" height=\"150px\">";
         $img3= "<img src=\"{$row['photo3']}\" width=\"150px\" height=\"150px\">";
           
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
            <td> {$img1}</td>
            <td> {$img2}</td>
            <td> {$img3}</td>
           
            
          </tr>	
          ";
}
            ?>
            
        </tbody>
            
            </table>


<script type="text/javascript">
    "use strict"

function ajax(){
	
	const data = document.getElementById('searchProduct').value;
	const xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../view/scriptadmin/searchProduct.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('searchProductResult').innerHTML = this.responseText;
		}
	}
	xhttp.send('name='+data);

}
</script>

<?php 
include('footer.php');
 ?>