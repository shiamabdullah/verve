<?php


$user = array(array('username'=> "s", 'password'=> "dd", 'email'=>"ss")) ;
$json = json_encode($user);
var_dump($user);
$myfile = fopen('../model/admin.json', "w");
fwrite($myfile, $json);
fclose($myfile);

$myfile = fopen('../model/admin.json', "r");


?>