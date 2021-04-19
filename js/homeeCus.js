
function addToCart(username,productId){
    $.ajax({  
        type: "POST",  
        url: "addToCart.php",   
        data:{ 'username': username,
               'pid': productId 
            }
        ,  
        success: function (data) {  
            if(data){
                alert(data);
            }
            else{
                alert("Something went wrong!!!");
            }
        },
        error:function(data){
            alert("something went wrong!!!");
        }
    });
}