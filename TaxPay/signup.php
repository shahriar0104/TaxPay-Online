<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
if (!session_id()) {
	session_start();
}
include_once ('db.php');
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" media="all" />
	<link rel="stylesheet" href="css/bjqs.css">
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/bjqs-1.3.min.js"></script>
	<script src="js/libs/jquery.secret-source.min.js"></script>

</head>
<body>
	<div class="header-bg">
		<div class="wrap">
			<div class="logo">
				<a href="home.php"><img src="images/logo.png" alt=""> </a>
			</div>
			<div class="search">

				<form action='signup.php' method='post'>
					<?php
					$form="<table>
					<tr>
					<td>NID Number : </td>
					<td><input type='text' name='nid_no'></td>
					</tr>
					<tr>
					<td>Password : </td>
					<td><input type='password' name='pass'></td>
					</tr>
					<tr>
					<td>Confirm Password : </td>
					<td><input type='password' name='pass1'></td>
					</tr>
					<tr>
					<td></td>
					<td><input type='submit' name='submit' value='Sign Up'</td>
					</tr>
					</table>";

					if (isset($_POST['submit'] )&& !empty($_POST['submit'])){
						$nid_no = $_POST['nid_no'];
						$pass = $_POST['pass'];
						$pass1 = $_POST['pass1'];

						if($nid_no){
							if($pass){
								
								if($pass == $pass1){
									$_SESSION['nid_no'] = $nid_no;
									$query ="INSERT INTO customer_info(nid_no, pass) VALUES (?,?);";
									if(($stmt=$conn->prepare($query))) {
										$stmt->bind_param("ss",$nid_no,$pass);

									}else
									{
										var_dump($conn->error);
									}
									$stmt->execute();
									$stmt->close();
									header("Location:biodata.php");
								}
								else{
									echo "You passwords didn't match. $form";
								}
								
							}
							else{
								echo "You must enter your password. $form";
							}
						}
						else{
							echo "You must enter your nid_no. $form";
						}
					}
					else
						echo $form;
					?>
				</form>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="nav1-bg">
		<div class="wrap">
			<div class="nav"> 
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About </a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="products.html">Products</a></li>
					<li><a href="projects.html">Projects</a></li>
					<li><a href="contact.php">Contact</a></li>
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
					
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="clear"></div>
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
