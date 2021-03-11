<?php


// $user = array(array('username'=> "s", 'password'=> "dd", 'email'=>"ss")) ;
// $json = json_encode($user);
// var_dump($user);
// $myfile = fopen('../model/admin.json', "w");
// fwrite($myfile, $json);
// fclose($myfile);

// $myfile = fopen('../model/admin.json', "r");
        $file_name='../model/admin.json';
        $myfile = fopen($file_name, "r");
		$data = fread($myfile, filesize($file_name));
		$user = json_decode($data, true);
var_dump($user);


function multidimensional_search($parents, $searched) {
    if (empty($searched) || empty($parents)) {
      return false;
    }
  
    foreach ($parents as $key => $value) {
      $exists = true;
      foreach ($searched as $skey => $svalue) {
        $exists = ($exists && IsSet($parents[$key][$skey]) && $parents[$key][$skey] == $svalue);
      }
      if($exists){ return $key; }
    }
  
    return false;
  }

  echo multidimensional_search($user, array('userid'=>'ab123', 'password'=>'ss')); // 1


  $key = array_search('abc123', array_column($user, 'userid'));
echo $user[$key]['password'];
?>

<tr>
                    <ul>
                            <li><a href="viewprofile.php"> View Profile</a></li>
                            <li><a href="editprofile.php"> Edit Profile</a></li>
                            <li><a href="changephoto.php"> Change Profile Picture</a></li>
                            <li><a href="changepass.php"> Change Passowrd</a></li>
                        </ul>
               
                    </tr>
<table>
                        <ul>
                            <li><a href="viewprofile.php"> View Profile</a></li>
                            <li><a href="editprofile.php"> Edit Profile</a></li>
                            <li><a href="changephoto.php"> Change Profile Picture</a></li>
                            <li><a href="changepass.php"> Change Passowrd</a></li>
                        </ul>
               
                    </td>
                    
					</td>
    
                       
     

