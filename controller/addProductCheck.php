<?php ;
	require_once('../model/admin/productModel.php');

	if(isset($_POST['submit'])){


        $productName = trim($_POST['productName']," ");
        $category = trim($_POST['category']," ");  // Storing Selected Value In Variable
        $subCategory = trim($_POST['subCategory']," ");  // Storing Selected Value In Variable
        $description = $_POST['description'];
        $buyingPrice = trim($_POST['buyingPrice']," ");  // Storing Selected Value In Variable
        $sellingPrice = trim($_POST['buyingPrice']," ");  // Storing Selected Value In Variable
        $displayable = trim($_POST['displayable']," ");  // Storing Selected Value In Variable
        $displayable = trim($_POST['displayable']," ");  // Storing Selected Value In Variable
        

        $file_name= $_FILES['file']['name'];
        $file_type= $_FILES['file']['type'];
        $file_size= $_FILES['file']['size'];
        $file_tem_loc= $_FILES['file']['tmp_name'];

        $target_file = '../Assets/ProductPhotos/' . basename($productName."_".$file_name);
        if (empty($file_name) or empty($file_type) or empty($file_size) or empty($file_tem_loc)  ){
            echo "null";
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
            
            $product = ['productName'=> $productName,'category'=> $category, 'subCategory'=> $subCategory, 
                        'description'=>$description, 'buyingPrice'=>$buyingPrice, 'sellingPrice'=>$sellingPrice,
                        'displayable'=>$displayable, 'photo1'=>$target_file];
            
            insertProduct($product);
        }
            
        

        }
		

    

?>