
<!DOCTYPE HTML>
<html>
<head>
  <title>Update Form</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" media="all" />
  <link rel="stylesheet" href="css/bjqs.css">
  <script src="js/jquery-1.7.1.min.js"></script>
  <script src="js/bjqs-1.3.min.js"></script>
  <script src="js/libs/jquery.secret-source.min.js"></script>

  <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
  <link href="css/login-register.css" rel="stylesheet" />
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!--<script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>-->
  <script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
  <script src="js/login-register.js" type="text/javascript"></script>

</head>
<body>
  <div class="header-bg">
    <div class="wrap">
     <div class="logo">
      <a href="index.html"><img src="images/logo.png" alt=""> </a>
    </div>

    <!--<div class="search">
      <div class='contact-right'>
        <a href="login.php"><h3>User Login</h3></a>
        <br/>
        <a href="login1.php"><h3>Admin Login</h3></a>
      </div>
    </div>-->

    <div class="clear"></div>
  </div>
</div>
<div class="clear"></div>
<div class="nav1-bg">
  <div class="wrap">
   <div class="nav"> 
    <ul>
      <li ><a href="index.php">Home</a></li>
      <li><a href="about.php">About </a></li>
      <li><a href="rules.php">Rules</a></li>
      <li><a href="publication.php">Publications</a></li>
      <li class="active"><a href="contact.php">Contact</a></li>
      <li><a href="javascript:void(0)" onclick="openLoginModal();">Login</a></li>
    </ul>       
  </div>
  <div class="clear"></div>
</div>
</div>
<div class="clear"></div>
<div class="body-content">
  <div class="wrap">
   <div class="slider">
     <div id="container">
      <div id="banner-fade">
        <ul class="bjqs">
         <li><img src="images/slide1.jpg" alt="" title=""></li>
         <li><img src="images/slide2.jpg"alt="" title=""></li>
         <li><img src="images/slide3.jpg" alt="" title=""></li> </ul>
         <!-- end Basic jQuery Slider -->
       </div>
     </div>
   </div>
   <div class="contact-left">
    <br>
    <h3>contact info</h3>
    <div class="map">
      <iframe
      width="498"
      height="370"
      frameborder="0" style="border:5"
      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAh5jpr7IHA8rml6f_WGbwP3-rTT5k4vwE
      &q=MIST+Academic+Tower,Mirpur+WA" allowfullscreen>
    </iframe>
  </div>	
  <!--<div class="grids">
   <h4>MIST CSE-15</h4>
   <span>SAD Sessional(Group 5)</span><br>
   <span>Land Phone: +88029007180</span>?<br>
   <span>Telephone: +8801629735079</span> <br>
   <span>FAX: +9901621128756</span><br>
   <span>email : efazdipon@gmail.com</span>
 </div> -->
</div>

<div class="about-right">
  <h3>MIST CSE-15</h3>

  <div class="clear"> </div>
  <div class="para">
   <p>SAD Sessional(Group 5)</p>
   <p>Land Phone: +88029007180</p>
   <p>Telephone: +8801629735079</p>
   <p>FAX: +9901621128756</p>
   <p>email : efazdipon@gmail.com</p>
 </div>
 <div class="clear"> </div>
</div>

<div class="clear"> </div>
</div>


<div class="modal fade login" id="loginModal">
      <div class="modal-dialog login animated">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Login</h4>
          </div>

          <!-- login -->
          <div class="modal-body">  
            <div class="box">
              <div class="content">

                <div class="error"></div>


                <div class="form loginBox">
                  <form method="post" action="index.php" accept-charset="UTF-8">
                    <input id="nid_no" class="form-control" type="text" placeholder="NID No" name="Username">
                    <input id="pass" class="form-control" type="password" placeholder="Password" name="password">
                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                  </form>
                </div>
              </div>
            </div>

            <!-- Registration -->

            <div class="box" id="RegistrationBox">
            <div class="content registerBox" style="display:none;">
              <div class="form">
                <form method="post" html="{:multipart=>true}" data-remote="true" action="index.php" accept-charset="UTF-8">
                  <input id="registrationNid" class="form-control" type="text" placeholder="NID No" name="Nid no">
                  <input id="registrationEmail" class="form-control" type="text" placeholder="Email" name="email">
                  <input id="registrationPassword" class="form-control" type="password" placeholder="Password" name="password">
                  <input id="registrationPassword_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                  <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit" onclick=" RegistrationAjax(event)">
                </form>
              </div>


            </div>
          </div>
          </div>
          <div class="modal-footer">
            <div class="forgot login-footer">
              <span>Looking to 
                <a href="javascript: showRegisterForm();">create an account</a>
                ?</span>
              </div>
              <div class="forgot register-footer" style="display:none">
                <span>Already have an account?</span>
                <a href="javascript: showLoginForm();">Login</a>
              </div>
            </div>        
          </div>
        </div>
      </div>



<div class="clear"></div>
</div>
</div>
<?php include "footer.php"; ?>
</body>
</html>
<script>
  jQuery(function($) {
    $('.secret-source').secretSource({
      includeTag: false
    });

  });
</script>
<script>
  jQuery(document).ready(function($) {
    $('#banner-fade').bjqs({
      height      : 400,
      width       :1000,
      responsive  : true
    });

  });
</script>