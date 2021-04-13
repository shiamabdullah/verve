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
	<table border="2" align="center" cellpadding="10" width="auto">
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
        <?php ; ?>

        <?php $sql = "select * from products";
    	$result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result))
		
		{
            echo 	"<tr>
                        <td>{$row['pid']}</td>
                        <td>{$row['productName']}</td>
                        <td>{$row['category']}</td>
                        <td>{$row['subCategory']}</td>
                        <td>{$row['description']}</td>
                        <td>{$row['buyingPrice']}</td>
                        <td>{$row['sellingPrice']}</td>
                        <td>{$row['stock']}</td>
                        <td>{$row['displayable']}</td>
                        <td>{$row['photo2']}</td>
                        <td>{$row['photo3']}</td>";             
                        
        }
    ?>
    </table>


<?php 
include('footer.php');
 ?>