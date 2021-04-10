<?php ;
$title='Add Product';
include('sessionheader.php');
    $myfile = fopen('../model/customer.json', "r");
    $data = fread($myfile, filesize('../model/customer.json'));
    $users = json_decode($data, true);
?>

<a href="home.php">Back</a> |
	<a href="../controller/logout.php">logout</a>	
	<br>
	
	<h1>User list</h1>
	<table border="1">
        <tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>ACTION</td>
		</tr>
    <?php 
    foreach ($users as $id=>$user)
    {   echo "<tr>";

		$ids=$id+1;
        echo "<td>  $ids </td>";

     foreach ($user as $type=>$value){
        if ($type=='username'){
            echo "<td>";
            echo "$value";
        }
        echo "</td>";

        if ($type=='email'){
            echo "<td>";
            echo "$value";
        }
        echo "</td>";

     }

     echo "<td>";
     echo "<a href=\"../controller/edituser.php?id=$ids\">";
     echo" Edit </a>";

     echo "<a href=\"delete.php?id=$ids\">";
     echo" Delete </a>";
     echo "</td>";

     echo "</tr>";

    }

     ?>
 </table>

<?php 
include('footer.php');
 ?>