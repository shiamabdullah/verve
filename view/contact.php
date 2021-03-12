<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <table border="1" width="100%" align="center">
        <tr>
            <td colspan="3" height="80px" align="left">
                <img src="../Assets/MabLogo.jpg" height="70px">
            </td>
            <td align="Right">
                <h4>
                    <a href="homeeCus.php"> Home</a> | 
                    <a href="../controller/logout.php" >Logout</a> 			
                </h4>
            </td>
        </tr>
    </table>
    <table border="1" width="100%" align="center" height="400px">
        <td align="center">
            
            <form method="post" action="logcheckCus.php">               
                <fieldset style="width:320px">
                    <legend height>Contact</legend>
                    <table height="100px">
                        <tr>
                            <h3>Md.Shahil Patwary</h3>
                            <h4>Technical Director| MAB Group |</h4> 
                            <h5>Phone:01788264342 | Email:Shahilpatwary@gmail.com </h5>  
                        </tr>
                    </table>
                </fieldset>
            </form>
        </td>
        </table>
    <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright2021@MAB</center></td> 
    </table> 
    
</body>
</html>
<?php
	}else{
		header('location: ../view/login.html ');
	}
?>