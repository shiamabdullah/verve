$(document).ready(function () {
    //inputs
        //signup pg
        const name = $("#name");
        const email = $("#email");
        const password = $("#password");
        const repass = $("#repass");
        const newPass = $("#newPass");
        const conPass = $("#conPass");
        //..useremail
        const uEmail=$("#userEmail");
        const userName=$("#userName");
    
    
    
    //span
        const nameMsg = $("#nameMsg");
        const passwordMsg = $("#passwordMsg");
        const repassMsg = $("#repassMsg");
        const emailMsg = $("#emailMsg");
        const userNameMsg = $("#userNameMsg");
    
        //..change pass page.//
        const newPassMsg = $("#newPassMsg");
        const conPassMsg = $("#conPassMsg");

        const userEmailMsg=$("#userEmailMsg");

   
    
        userName.keyup(function(){
        var admin= userName.val();
        
        $.ajax({
            url:'../view/scriptadmin/adminNameCheck.php',
            method: "POST",
            data:{admin_name:admin},
            dataType:"text",
            success:function(data){
                console.log(data);
                userNameMsg.html("");

                if(data!='0' || admin.length==0){
                    userNameMsg.css("color", "red");
                    userNameMsg.html("⚠️Already Used Try a different Name");
                }
                else{
                    userNameMsg.css("color", "green");
                    userNameMsg.html("✅ okay");
                }
            }
            
        });
        });
        
      
    
        name.keyup(function(){
            console.log(name.val);
            if(name.val().length <4){
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
        // email.keyup(function(){
        //     var emailSplit=email.val().split("@");
            
        //     console.log(emailSplit[1].indexOf("."));
        //     var dot = emailSplit[1].indexOf(".");
        //     //var len = emailSplit[1].length;
        //     var dotSplits = emailSplit[1].split(".");
        //     var dotCount = dotSplits.length - 1;
    
        //      if(email.val().indexOf("@") === -1){
        //         emailMsg.css("color", "red");
        //         emailMsg.html("⚠️email doesn't have @ character");
                
        //     }
            
        //     else if(dot == -1 || dot < 2 || dotCount > 2)
        //     {
        //         emailMsg.css("color", "red");
        //         emailMsg.html("⚠️Dot is not present, and not atleast 1 character after @");
    
        //     }else{
        //         emailMsg.css("color", "green");
        //         emailMsg.html("✅ okay");
        //     } });
    
            email.keyup(function(){
               //alert(email.val());
                var adminEmail= email.val();
                $.ajax({
                    url:'../view/scriptadmin/adminEmailCheck.php',
                    method: "POST",
                    data:{admin_email:adminEmail},
                    dataType:"text",
                    success:function(data){
                        console.log(data);
                        if(data!='0'){
                            emailMsg.css("color", "red");
                            emailMsg.html("⚠️Already Used Try a different Email");
                        }
                        else{
                            emailMsg.css("color", "green");
                            emailMsg.html("✅ okay");
    
                            //basic vals
                            var emailSplit=email.val().split("@");
            
                            console.log(emailSplit[1].indexOf("."));
                            var dot = emailSplit[1].indexOf(".");
                            //var len = emailSplit[1].length;
                            var dotSplits = emailSplit[1].split(".");
                            var dotCount = dotSplits.length - 1;
    
                            if(email.val().indexOf("@") === -1){
                                emailMsg.css("color", "red");
                                emailMsg.html("⚠️email doesn't have @ character");
                                
                            }
                            
                            else if(dot == -1 || dot < 2 || dotCount > 2)
                            {
                                emailMsg.css("color", "red");
                                emailMsg.html("⚠️Dot is not present, and not atleast 1 character after @");
    
                            }else{
                                emailMsg.css("color", "green");
                                emailMsg.html("✅ okay");
                            }
                            
                        }
                    }     
                });
                });
    
                newPass.keyup(function(){
                    if(newPass.val().length <8){
                        newPassMsg.css("color", "red");
                        newPassMsg.html("⚠️ Atleast 8 characters");
                    }
                    
                    else{
                        newPassMsg.css("color", "green");
                        newPassMsg.html("✅ Okay");
            
                    }
                });
    
                conPass.keyup(function(){
                    if(newPass.val()!==conPass.val()){
                        conPassMsg.css("color", "red");
                        conPassMsg.html("⚠️ Password and Confirm Password don't match");
                    }
                    
                    else{
                        conPassMsg.css("color", "green");
                        conPassMsg.html("✅ Okay");
            
                    }
                });

                uEmail.keyup(function(){
                    //alert(userName.val());
                    let userEmail= uEmail.val();
                    $.ajax({
                        url:'../view/scriptadmin/userEmailCheck.php',
                        method: "POST",
                        data:{user_email:userEmail},
                        dataType:"text",
                        success:function(data){
                            console.log(data);
                            if(data!='0'){
                                userEmailMsg.css("color", "red");
                                userEmailMsg.html("⚠️Already Used Try a different Email");
                            }
                            else{
                                userEmailMsg.css("color", "green");
                                userEmailMsg.html("✅ okay");
                                
                            }
                        }     
                    });
                    });

                    const searchUser= $("#searchUser");
                    const result= $("#searchUserResult");


                searchUser.keyup(function(){
                    var user = searchUser.val();
                    console.log(user);
                    $.ajax({    
                      type:'POST',
                      url: "../view/scriptadmin/searchUser.php",
                      data:{
                        s_user:user,
                      },
                        dataType:"text",

                      success:function(data){
                        result.html(data);
                    }
                    });
                  });

                  const editUser= $("#editUser");
                  const editUserResult= $("#editUserResult");


                editUser.keyup(function(){
                  var user = editUser.val();
                  console.log(user);
                  $.ajax({    
                    type:'POST',
                    url: "../view/scriptadmin/editUser.php",
                    data:{
                      s_user:user,
                    },
                      dataType:"text",

                    success:function(data){
                    editUserResult.html(data);
                  }
                  });
                });
              
                
                    
                
        });
    
    