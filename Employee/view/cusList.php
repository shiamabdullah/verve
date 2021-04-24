<?php
    session_start();
    if(isset($_SESSION['flag'])){
        require_once('../model/userModel.php');
  //  $user = $_SESSION['loggedInUser'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
<body>
<div class="menu-bar">

    
<ul>
     <li ><img src="../assets/MabLogo.jpg" height="60px" align="left"></li>
     <li class="active"><a href="home.php"><i class="fa fa-clone"></i> Home</a></li>
    <li ><a href="aboutUs.html"><i class="fa fa-user"></i> About us</a>
    </li>
    <li><a href="contact.php"><i class="fa fa-phone"></i> Contact</a></li>
     <li><a href="settings.php"><i class="fa fa-cog"></i> Settings</a></li>
    <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
</ul>

</div>
    <!-- <table border="1" width="70%%" align="center" height="400px">
        <td align="center">  -->  
           <!--  <form method="post" action="../controller/logcheck.php">               
                <fieldset style="width:300px">
                    <legend height>Product</legend> -->
        <table border="1" height="400px" width="400px" align="center">
            <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>Email</td>
            <td>Gender<br></td>
            <td>DateOfBirth<br></td>
            
        </tr>
    <!-- </thead>      
    <tbody> -->

        <?php 
      
        $conn=getConnection(); 
        $sql = "select * from user order by id ASC";
    	$result = mysqli_query($conn, $sql);
        $num=mysqli_num_rows($result);
        if($num > 0)
        {
            while($user=mysqli_fetch_array($result)){
            ?>
              <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['gender']; ?></td>
                <td><?php echo $user['dob']; ?></td>
        </tr>
        <?php
        }
    }   
        ?>  
        </table>
       



        <div class="menu-bar">
        <ul>
            <li>Copyright2021@MAB</a></li>
        </ul>
    </div>
</body>
</html>

<?php
    }else{
        header('location: ../view/login.html ');
    }
?>
