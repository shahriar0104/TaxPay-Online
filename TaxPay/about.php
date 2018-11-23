<!DOCTYPE HTML>
<html>
<head>
	<title>About</title>
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
				<a href="home.php"><img src="images/logo.png"/ alt=""> </a>
			</div>
			<!--<div class="search">
				<div class='contact-right'>
					<a href="login.php"><h3>User Login</h3></a>
					<br/>
					<a href="login1.php"><h3>Admin Login</h3></a>
				</div>
			</div> -->
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="nav1-bg">
		<div class="wrap">
			<div class="nav">
				<ul>
					<li ><a href="index.php">Home</a></li>
					<li class="active"><a href="about.php">About </a></li>
					<li><a href="rules.php">Rules</a></li>
					<li><a href="publication.php">Publications</a></li>
					<li><a href="contact.php">Contact</a></li>
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
							<li><img src="images/slide2.jpg" alt="" title=""></li>
							<li><img src="images/slide3.jpg" alt="" title=""></li> 
						</ul>
						<!-- end Basic jQuery Slider -->
					</div>
				</div>
			</div>
			<br/>
			<div class='contact-left'>
				<img src="images/about.png" width="450px">
			</div>
			<div class="cont-left">
				<h4>About NBR</h4></div>
				<div class="para">
					<p>The National Board of Revenue (NBR) is the apex authority of Tax administration in our cuntry. It was established by the father of the nation Bangabandhu Sheikh Mujibur Rahman under the president's Order no. 76 of 1972. Administratively, It is under the Internal Resources Division (IRD) of the ministry of Finance (MoF). The Secretary, IRD is the ex-officiio chairman of NBR</p>
					<br/><br/><br/>
					<p>
						NBR is responsible for formulation and re-appraisal of tax-politics and tax-laws, negotiating tax treaties with foreign governments and participating in inter ministerial deliberations on economic issues having a bearing on fiscal policies and tax administration. The main responsibility of NBR is to collect tax revenues (primarily, Vakue Added Tax, Customs Duty, Excise Duty and Income Tax).It works with 3 tax-typwe wings namely, Customs Wing, VAT Wing abd Income Tax Wing. There are Two more Wings namely IT wing and Research & Statistics Wing under NBR.
					</p>
					<br/><br/><br/>
				</div>
				<div class="Cont-part2">
					<div class="cont-left">
						<h4>latest news</h4>
						<div class="grid-left">
							<div class="date">
							</div>
							<div class="nav-cont">
								<ul> 
									<li><h6>Revenue from VAT on uptrend in Sylhet</h6></li>
									<li><span>Apr 4,2018</span></li>
								</ul>
							</div>
							<div class="clear"></div>
							<p>Revenue from VAT and customs duty remained on a rising trend in Sylhet division over last few years.
							In 2016-2017 fiscal year(FY),VAT collection stood over Tk 8.89 billion, an increase of more than Tk 1.32 billion from the previous fiscal year, a report of department shows.</p>
						</div>
						<div class="grid-left">
							<div class="date">
							</div>
							<div class="nav-cont">
								<ul> 
									<li><h6>"Riding Share" will come under Tax</h6></li>
									<li><span>Apr 24,2018</span></li>
								</ul>
							</div>
							<div class="clear"></div>
							<p>"Riding Share" will come under Tax from the next fiscal year(FY), a report of department shows.</p>
						</div>
					</div>
					<div class="cont-right">
						<h4>testimonials</h4>
						<div class="cont-pic">
						</div>

						<div class="nav-cont">
							<ul> 
								<li><h6>Tax fair goin on in Bangladesh-China Convention Center</h6></li>
								<li><span><br />Apr 24,2018</span></li>
							</ul>
						</div>
						<p>The tax fair is going on in the BAngladesh-China convention center.It is an easy chance for all of you to pay your tax in a very easy way and performing your duty towards your country.</p>

						<div class="cont-p">

							<div class="nav-cont">
								<ul> 
									<li><h6>    Last Date is Nearby</h6></li>
									<li><span><br/>Apr 30,2018</span></li>
								</ul>
							</div>    
							<p>The present Fiscal Year is almost at the end. Know the amount of of tax you are to pay. Know the basic rules and regulations. As a citizen of this country it is your duty to pay tax. Pay tax. It will come back to you by several multiple.</p>

						</div>
					</div>
					<div class="clear"></div>	

				</div>
			</div>
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
		<?php include "footer.php" ?>
	</body>
	</html>

	<script>
		jQuery(function($) {

			$('.secret-source').secretSource({
				includeTag: false
			});

		});
	</script>
	<script >
		jQuery(document).ready(function($) {

			$('#banner-fade').bjqs({
				height      : 400,
				width       :1000,
				responsive  : true
			});

		});
	</script>
