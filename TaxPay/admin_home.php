<?php
require_once('db.php');
if (!session_id()) {
	session_start();
	$nid_no = $_SESSION['nid_no'];
}
if($nid_no){
	?>
	<!DOCTYPE HTML>
	<html>
	<head>
		<title>Home</title>
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
					<a href="home.php"><img src="images/logo.png"/ alt=""> </a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="nav1-bg">
			<div class="wrap">
				<div class="nav"> 
					<ul>
						<li class="active"><a href="admin_home.php">Home</a></li>
						
						<li><a href="defaulters_list.php">Defaulter's List</a></li>
						<li><a href="userinfo.php">User Info</a></li>
						<li><a href="record1.php">Approval Request</a></li>
						<li><a href="logout1.php">Log out</a></li>
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
				<?php
			}
			else{
				header("Location:login1.php");
			}

			?>
		</p></li>
	</ul>
	<div class="rd-more">
	</div>
	<!--</div> -->
	<div class="clear"></div>
	<!--</div> -->			
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
