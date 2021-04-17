$(document).ready(function () {

    const name = $("#name");
    const password = $("#password");
    const repass = $("#repass");
    const userName = $("#userName");

    const nameMsg = $("#nameMsg");
    const passwordMsg = $("#passwordMsg");
    const repassMsg = $("#repassMsg");
    const userNameMsg = $("#userNameMsg");

    userName.blur(function(){
    alert(userName.val());
    $.ajax({
        url:'../../';
    })
    });

    name.keyup(function(){
        if(name.val().length <=4){
            nameMsg.css("color", "red");
            nameMsg.html("⚠️Must be atleast 4 char");
        }

        else if(!isNaN(name.val())){
            nameMsg.css("color", "red");
            nameMsg.html("⚠️Name can't only contain numbers");
        }
        
        else{
            nameMsg.css("color", "green");
            nameMsg.html("✅ okay");

        }
    });

    password.keyup(function(){
        if(password.val().length <8){
            passwordMsg.css("color", "red");
            passwordMsg.html("⚠️ Atleast 8 characters");
        }
        
        else{
            passwordMsg.css("color", "green");
            passwordMsg.html("✅ Okay");

        }
    });

    repass.keyup(function(){
        if(password.val()!==repass.val()){
            repassMsg.css("color", "red");
            repassMsg.html("⚠️ Password and confirm Password don't match");
        }
        
        else{
            repassMsg.css("color", "green");
            repassMsg.html("✅ Okay");

        }
    });

});