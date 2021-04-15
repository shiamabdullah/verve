<?php ;
	require_once('../model/admin/productModel.php');
    $conn = getConnection();

	if(isset($_POST['submit'])){


        $productName = trim($_POST['productName']," ");
        $category = trim($_POST['category']," ");  // Storing Selected Value In Variable
        $subCategory = trim($_POST['subCategory']," ");  // Storing Selected Value In Variable
        $description = $_POST['description'];
        $buyingPrice = trim($_POST['buyingPrice']," ");  // Storing Selected Value In Variable
        $sellingPrice = trim($_POST['sellingPrice']," ");  // Storing Selected Value In Variable
        $stock = trim($_POST['stock']," ");  // Storing Selected Value In Variable
        $displayable = trim($_POST['displayable']," ");  // Storing Selected Value In Variable
        $displayable = trim($_POST['displayable']," ");  // Storing Selected Value In Variable
        

        $file_name= $_FILES['file']['name'];
        $file_type= $_FILES['file']['type'];
        $file_size= $_FILES['file']['size'];
        $file_tem_loc= $_FILES['file']['tmp_name'];
 
        $file_name2= $_FILES['file2']['name'];
        $file_type2= $_FILES['file2']['type'];
        $file_size2= $_FILES['file2']['size'];
        $file_tem_loc2= $_FILES['file2']['tmp_name'];
        
        function validatefile($file_name,$file_type,$file_size,$file_tem_loc){
            
        }

        $target_file = '../Assets/ProductPhotos/' . basename($productName."_".$file_name);
       
        $product = ['productName'=> $productName,'category'=> $category, 'subCategory'=> $subCategory, 
        'description'=>$description, 'buyingPrice'=>$buyingPrice, 'sellingPrice'=>$sellingPrice,
        'stock'=>$stock,'displayable'=>$displayable, 'photo1'=>$target_file];

        if (empty($file_name) or empty($file_type) or empty($file_size) or empty($file_tem_loc)  ){
            echo "Must Upload Atleast one photo";
         }
     
         else if ( ( strpos($file_type, 'jpeg')!== false or str_contains($file_type, 'png') or str_contains($file_type, 'jpg'))!=true )
         {
             echo'enter a valid img file  jpeg or jpg or png ';
         }
         else if ((floatval($file_size)/1000)>=4096)
         {
             echo 'file is greater than 4mb';
     
         }
        else if(!(ctype_alnum($productName)))
        {
            echo "name can only contain alphanumeric char";
        }
        else if( str_word_count($description)>200 ){

            echo "description can't contain more than 200 char";
        }
        else{
            echo $target_file;
            if (is_uploaded_file($_FILES['file']['tmp_name']))
            {       
                move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
                echo "uploaded";
                //echo $target_file;
                $status=insertProduct($product);
                if($status)
                    {
                        echo "added";
                        
                    }
                    else
                    {
                        echo "Error";
                    }
            }
                
            
        else {
        echo "not stored in server";  }  

        }    
            
           
            
        

        }
		

    

?>