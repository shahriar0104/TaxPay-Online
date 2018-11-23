<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$admin_no = $_SESSION['admin_no'];
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Admin Login</title>
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
				<?php

				$form = "<form action='login1.php' method='post'>
				<table>
				<tr>
				<td>Admin Number : </td>
				<td><input type='text' name='admin_no'></td>
				</tr>
				<tr>
				<td>Password : </td>
				<td><input type='password' name='pass'></td>
				</tr>
				<tr>
				<td></td>
				<td><input type='submit' name='loginbtn' value='Login'</td>
				</tr>
				</table>
				</form>";
				if (isset($_POST['loginbtn'] )&& !empty($_POST['loginbtn'])){
					$admin_no = $_REQUEST['admin_no'];
					$pass = $_REQUEST['pass'];

					if($admin_no){
			if($pass){			//$pass = md5($pass);
				require_once("db.php");
				$query = $conn->query("SELECT * FROM admin_info where admin_no=$admin_no");
				//$numrow = mysql_num_rows($query);
				if ($row = $query->fetch_object()){
					//$row = mysql_fetch_assoc($query);
					$dadmin_no = $row->admin_no;
					$dpass = $row->pass;
					if($pass == $dpass){
						$_SESSION['admin_no'] = $dadmin_no;
						header("Location:admin_home.php");
					}
					else{
						echo "You didn't enter correct Password. $form";
					}
				}
				else{
					echo "The NID Number you entered was not found. $form";
				}
				//mysql_close();
			}
			else{
				echo "You must enter your password. $form";
			}
		}
		else{
			echo "You must enter your NID_no. $form";
		}
	}
	else
		?>
	<?php
	echo $form;

	?>
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
					<!-- end Basic jQuery Slider -->
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
	