<?php
	session_start();
    require_once('../model/userModel.php');

    if (isset($_POST['submit']))
    {   
        $name 		 = $_POST['name'];     
        $email       = $_POST['email'];
        $username    = $_POST['username'];
        $password    = $_POST['password'];
        $re_password = $_POST['re_password'];
        $gender      = $_POST['gender'];
        $dob         = $_POST['dob'];
        
        if ($name=="" ||$email == "" || $username =="" || $password == "" || $gender =="" || $dob =="") 
        { 
            echo "Enter the all value";
        } 
        else
		{
        if (isset($_GET['username'])) 
        {
            $a=$_GET['username'];
            
            if (strlen($a)>0) {
                if (str_word_count($a)>1) {
                    if(($a[0]>='a' && $a[0]<='z') || ($a[0]>='A' && $a[0]<='Z')){
                        $b=strlen($a);
                        while ($b<0) {
                          
                            if ($a[$b]<'a' && $a[$b]!='' && $a[$b]!='.' && $a[$b]!='-') {
                             
                                echo "invalid";
                                break;
                            }
                            elseif ($a[$b]>'Z') {
                               
                                if ($a[$b]<'a') {
                              
                                    echo "Invalid";
                                    break;
                                }
                                elseif ($a[$b]<'a') {
                               
                                    echo "Invalid";
                                    break;
                                }
                            }
                            $b=$b-1;

                        }
                    }
                    else{ echo "Please input a valid name";}
                }
                else{ echo "Please input a valid name";}
            }
            else{ echo "Please input a valid name";}

        }

        if (isset($_GET['email'])) {
            $a=$_GET['email'];
            if ($a=="") {
                echo "Eamil cannot be empty";
            }
            else {
                echo $a;
            }
        }

        if (isset($_GET['gender'])) {
            $a=$_GET['gender'];
            echo $a;
        }
        if(isset($_GET['submit']) && !isset($_GET['gender']))
            {
                echo "select a gender";
            }


        if (isset($_GET['dob'])) {
            $a=$_GET['dob'];
            echo $a;
        }
        else
        {
            
            if(isset($_GET['submit']))
            {
                echo "select a option ";
            }
        }
                $customer = [
                    'name'=>$name,
                    'username'=> $username,
                    'password'=> $password,
                    'email'=>$email,
                    'gender'=>$gender,
                    'dob'=>$dob
                ];
		

                $status=insertUser($customer);
                if($status)
                {
                    header('location: ../view/loginCus.html');
                }
                else
                {
                    echo "Error";
                }
            }
        }

?> 