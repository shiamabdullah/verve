<?php
require('../../model/admin/db.php');
$conn = getConnection();

$product = $_REQUEST['name'];
$sql = "SELECT * FROM `products` WHERE `productName` LIKE '%" . $product . "%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $img1 = "<img src=\"{$row['photo1']}\" width=\"150px\" height=\"150px\">";
    $img2 = "<img src=\"{$row['photo2']}\"width=\"150px\" height=\"150px\">";
    $img3 = "<img src=\"{$row['photo3']}\" width=\"150px\" height=\"150px\">";

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
} else {
  echo "<tr><td>0 result's found</td></tr>";
}
