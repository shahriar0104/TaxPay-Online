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
					<li ><a href="about.php">About </a></li>
					<li><a href="rules.php">Rules</a></li>
					<li class="active"><a href="publication.php">Publications</a></li>
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
			<div class="Cont-part2">

				<div class="grid-left">
					<div class="date">
					</div>
					<div class="nav-cont">
						<ul> 
							<li><a href="http://nbr.gov.bd/uploads/publications/240.jpg" download=""><h4>Clarification on tax deduction at source from bills against the rental income of vehicle on which persumptive tax has been paid.</h4></a></li>
							<li><span>Feb 22,2016</span></li>
						</ul>
						<p>Clarification on tax deduction at source from bills against the rental income of vehicle on which persumptive tax has been paid.</p>
					</div>
				</div>
				<div class="grid-left">
					<div class="date">
					</div>
					<div class="nav-cont">
						<ul> 
							<li><a href="http://nbr.gov.bd/uploads/publications/226.docx" download=""><h4>INformation about e-Tin</h4></a></li>
							<li><span>Jan 1,2016</span></li>
						</ul>

						<p>"Riding Share" will come under Tax from the next fiscal year(FY), a report of department shows.</p>
					</div>
				</div>

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
<div class="footer-new">
		<div class="wrap">
			<div class="footer">
				<div class="footer-link">	
					<ul>
						<li><span>All Rights Reserved &copy; 2018 Online Tax Pay.| Designed by </span> <a href="http://w3layouts.com/">W3Layouts</a></li>
					</ul>	
				</div>
				<div class="soc">
					<a href="#"><img src="images/facebook.png" alt="" title="Rss Feed"></a>
					<a href="#"><img src="images/twitter.png" alt="" title="Twitter"></a>
					<a href="#"><img src="images/feed.png" alt="" title="Facebook"></a>
					<a href="#"><img src="images/youtube.png" alt="" title="Twitter"></a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</body>
</html>