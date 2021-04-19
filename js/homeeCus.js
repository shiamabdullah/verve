
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
                alert("Product Added to Cart!!!");
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
function addToWish(username,productId){
    $.ajax({  
        type: "POST",  
        url: "addToWish.php",   
        data:{ 'username': username,
               'pid': productId 
            }
        ,  
        success: function (data) {  
            if(data){
                alert("Product Added to Wishlist!!!");
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