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
   

   $.post( "registration.php", function() {
    var userName=$('#registrationName').val();
    var password=$('#registrationPassword').val();
    var re_password=$('#registrationPassword_confirmation').val();

    if (!userName=="") {

        if (!password=="") {

           if (!re_password=="") {

             if (!(password==re_password)) {
               shakeModal("password didn't match");
           }else{
             // window.location.replace("about.html"); 

             $.post('registration.php',{postName:userName,postPassword:password},
                function(data)
                {


                    if (data==1) {
                        //window.location.replace("problem.php"); 
                        registrationComplete();
                    }
                    if (data==2) {
                       shakeModal("username has been taken");
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

   shakeModal("username cannot be empty");

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
                   window.location.replace("home.php"); 

               }else if (data==2) {
                   window.location.replace("home.php"); 
               }else{

                 shakeModal("Wrong Username or Password"); 
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
    $('.error').addClass('alert successfully-submit').html("Registration Complete,Please LogIn");
    $('input[type="password"]').val('');
    $('input[type="text"]').val('');

    setTimeout( function(){ 
        $('#loginModal .modal-dialog').removeClass(''); 
    }, 1000 ); 
}