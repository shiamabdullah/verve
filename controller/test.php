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
    
    
?>

