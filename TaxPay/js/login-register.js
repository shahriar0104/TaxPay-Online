function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}


function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register with');
    }); 
    $('.error').removeClass('alert alert-danger').html('');

}

function RegistrationAjax(e){
   // console.log("asse");
   

   $.post( "signup1.php", function() {
    var userNid=$('#registrationNid').val();
    var email = $('#registrationEmail').val();
    var password=$('#registrationPassword').val();
    var re_password=$('#registrationPassword_confirmation').val();

    if (userNid.length != 10) {
         shakeModal("NID has to be of 10 Character");
    } else {
        if (!userNid=="") {

        if (!password=="") {

           if (!re_password=="") {

             if (!(password==re_password)) {
               shakeModal("password didn't match");
           }else{
             // window.location.replace("about.html"); 

             $.post('signup1.php',{postNid:userNid,postEmail:email,postPassword:password},
                function(data)
                {


                    if (data==1) {
                        //window.location.replace("problem.php"); 
                        //registrationComplete();
                        shakeModal("Registration Complete,Please check Your email for Login with security code");
                        //window.location="biodata.php";
                    }
                    if (data==2) {
                       shakeModal("NID has been taken");
                   }
                   if (data==3) {
                    alert("please try again");
                }
            });

         }

     }else{
       shakeModal("password confirmation cannot be empty");
   }
}else{
    shakeModal("password cannot be empty");
}
}else{
   shakeModal("NID cannot be empty");
}
    }

});

   e.preventDefault();

}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);

}

function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });

        $('.modal-title').html('Login with');
    });       
    $('.error').removeClass('alert alert-danger').html(''); 
}

function loginAjax(check){


    $.post( "index.php", function() {
        var nid_no=$('#nid_no').val();
        var pass=$('#pass').val();

        if (nid_no=="" || pass=="") {

            shakeModal("NID No or Password cannot be empty");

        }else{
            $.post('login3.php',{nid_no:nid_no,pass:pass},
                function(data)
                {

                 if (data==1) {
                   window.location.replace("admin_home.php"); 

               }else if (data==2) {
                   window.location.replace("home.php"); 
               }else{

                 shakeModal("Wrong Username or Password"); 
             }


         });
        }

    });
    
}


function loginVerifyAjax(check){


    $.post( "index.php", function() {
        var nid_no=$('#nid_no').val();
        var pass=$('#pass').val();
        var code=$('#code').val();

        if (nid_no=="" || pass=="" || code=="") {

            shakeModal("NID No or Password or Code cannot be empty");

        }else{
            $.post('loginverify.php',{nid_no:nid_no,pass:pass,code:code},
                function(data)
                {

                if (data==2) {
                   window.location.replace("biodata.php"); 
               }else{

                 shakeModal("Wrong Username or Password or Verification Code"); 
             }


         });
        }

    });
    
}


function shakeModal(error){
    $('#loginModal .modal-dialog').addClass('shake');
    $('.error').addClass('alert alert-danger').html(error);
    $('input[type="password"]').val('');
    $('input[type="text"]').val('');
    setTimeout( function(){ 
        $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

function registrationComplete(){
    $('#loginModal .modal-dialog').addClass('');
    $('.error').addClass('alert successfully-submit').html("Registration Complete,Please check Your email for Login with security code");
    $('input[type="password"]').val('');
    $('input[type="text"]').val('');

    setTimeout( function(){ 
        $('#loginModal .modal-dialog').removeClass(''); 
    }, 1000 ); 
}