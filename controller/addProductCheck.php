<?php ;
	if(isset($_POST['submit'])){

        $name = trim($_POST['name']," ");
        $description = trim($_POST['description']," ");
        $category = $_POST['category'];  // Storing Selected Value In Variable
        $subCategory = $_POST['subCategory'];  // Storing Selected Value In Variable
        
        if(!ctype_alnum($name))
        {
            echo "name can only contain alphanumeric char";
        }
        else if( str_word_count($description)>200 ){

            echo "description can't contain more than 200 char";
        }
        else{
            echo $name;
            echo $description;
            echo $category;
            echo $subCategory;

        }
		

    }

?>