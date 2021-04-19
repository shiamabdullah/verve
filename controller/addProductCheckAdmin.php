<?php ;
    $title='view added product';

    //include_once ('../view/sessionheader.php');
    session_start();
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
        

        $file_name1= $_FILES['file']['name'];
        $file_type1= $_FILES['file']['type'];
        $file_size1= $_FILES['file']['size'];
        $file_tem_loc1= $_FILES['file']['tmp_name'];
 
        $file_name2= $_FILES['file2']['name'];
        $file_type2= $_FILES['file2']['type'];
        $file_size2= $_FILES['file2']['size'];
        $file_tem_loc2= $_FILES['file2']['tmp_name'];

        
        $file_name3= $_FILES['file3']['name'];
        $file_type3= $_FILES['file3']['type'];
        $file_size3= $_FILES['file3']['size'];
        $file_tem_loc3= $_FILES['file3']['tmp_name'];
        
        function validatefile($file_name,$file_type,$file_size,$file_tem_loc){
            if (empty($file_name) or empty($file_type) or empty($file_size) or empty($file_tem_loc)  ){
                echo "Must Upload 3 photos ";
                return false;}
         
             else if ( ( strpos($file_type, 'jpeg')!== false or str_contains($file_type, 'png') or str_contains($file_type, 'jpg'))!=true )
             {  echo "$file_name";
                 echo'enter a valid img file  jpeg or jpg or png ';
                 return false;
             }
             else if ((floatval($file_size)/1000)>=4096)
             {
                 echo "$file_name is greater than 4mb";
                 return false;
         
             }else{
                 return true;
             }
        }

        $filestatus1 =  validatefile($file_name1,$file_type1,$file_size1,$file_tem_loc1);
        $filestatus2=   validatefile($file_name2,$file_type2,$file_size2,$file_tem_loc2);
        $filestatus3=   validatefile($file_name3,$file_type3,$file_size3,$file_tem_loc3);

        $target_file1 = '../Assets/ProductPhotos/' . basename($productName."_".$file_name1);
        $target_file2 = '../Assets/ProductPhotos/' . basename($productName."2_".$file_name2);
        $target_file3 = '../Assets/ProductPhotos/' . basename($productName."3_".$file_name3);
       
        $product = ['productName'=> $productName,'category'=> $category, 'subCategory'=> $subCategory, 
        'description'=>$description, 'buyingPrice'=>$buyingPrice, 'sellingPrice'=>$sellingPrice,
        'stock'=>$stock,'displayable'=>$displayable, 'photo1'=>$target_file1, 'photo2'=>$target_file2,'photo3'=>$target_file3];
        if( !($filestatus1 and $filestatus2 and $filestatus3)){
            echo "enter files again";
        }
         else if(!(ctype_alnum($productName)) )
        {
            echo "name can only contain alphanumeric char";
        }
        else if( str_word_count($description)>200 ){

            echo "description can't contain more than 200 char";
        }
        else{
            
            if (is_uploaded_file( $file_tem_loc1) and is_uploaded_file( $file_tem_loc2) and is_uploaded_file( $file_tem_loc3))
            {       
                move_uploaded_file($file_tem_loc1, $target_file1);
                move_uploaded_file($file_tem_loc2, $target_file2);
                move_uploaded_file($file_tem_loc3, $target_file3);
                echo "uploaded files <br>";
               //print_r($product);
                $status=insertProduct($product);
                if($status==1)
                    {
                        $_SESSION['stat']="Added Product";
                        $_SESSION['stat_code']="success";                        
                        
                    }
                    else
                    {
                        echo "Error while adding to database";
                    }
            }
                
            
        else {
        echo "not stored in server";  }  

        }    
            
           
            
        

        }
		
        require_once ('../view/footer.php');

    

?>