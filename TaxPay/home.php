<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require_once('db.php');
if (!session_id()) {
	session_start();
	$nid_no = $_SESSION['nid_no'];
}
if($nid_no) {
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
				<div class="navhome"> 
					<ul>
						<li class="active"><a href="home.php">Home</a></li>
						<li><a href="update.php">Update Informations</a></li>
						<li><a href="taxpay.php">Pay Tax</a></li>
						<li><a href="record.php">Tax Record</a></li>
						<li><a href="netwealth.php">Net Wealth Record</a></li>
						<li><a href="logout.php">Log out</a></li>
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

				$NidUnique="0";
				$sql="select nid_no from biodata;";
				$res=$conn->query($sql);
				while ($row=$res->fetch_assoc()) {
					if ($nid_no===$row['nid_no']) {
						$NidUnique="1";
						break;          
					}         
				}
				if ($NidUnique == "0") {

					header("Location:biodata.php");
				} else{
					$result = $conn->query("SELECT * FROM biodata where nid_no = '$nid_no';");
					while ($row = $result->fetch_object()){

						?>

						<div class="content-main">
							<div class="grid-a">
								<ul>
									<!--<li><?php echo "<img src='uploadimages/".$row->image."' > "; ?></li> -->
									<li><h5>profile Picture</h5></li>
									<li><img src=<?php
									echo "uploadimages/".$row->image."";
									?> height="160px" width="150px" ></li>
								</ul>
								<div class="rd-more">
								</div>
							</div>
							<div class="grid-a">
								<ul>

									<li><h5>personal informations</h5></li>
									<li><p>
										<?php
										echo "<b>NID Number : </b>"; 
										echo $row->nid_no;
										echo "<br/>";
										echo "<b>Name : </b>"; 
										echo $row->name;
										echo "<br/>";
										echo "<b>Age : </b>"; 
										echo $row->age;
										echo "<br/>";
										echo "<b>Father's name : </b>"; 
										echo $row->father;
										echo "<br/>";
										echo "<b>Mather's Name : </b>"; 
										echo $row->mother;
										echo "<br/>";
										echo "<b>Spouce's Name : </b>"; 
										echo $row->spouse;
										echo "<br/>";
										echo "<b>Gender : </b>"; 
										echo $row->gender;
										echo "<br/>";
										?>

									</p></li>
								</ul>
								<div class="rd-more">
								</div>
							</div>
							<div class="grid-a">
								<ul>
									<li><h5>Tax <br/>Informations</h5></li>
									<li><p>
										<?php
										echo "<b>TIN Number : </b>"; 
										echo $row->tin;
										echo "<br/>";
										echo "<b>Tax Region : </b>"; 
										echo $row->tax_region;
										echo "<br/>";
										echo "<b>Tax Circle : </b>"; 
										echo $row->tax_circle;
										echo "<br/>";
										?>
									</p></li>
								</ul>
								<div class="rd-more">
								</div>
							</div>
							<div class="grid-r">
								<ul>
									<li><h5>Contact Informations</h5></li>
									<li><p>
										<?php
										echo "<b>Phone Number : </b>"; 
										echo $row->phone;
										echo "<br/>";
										echo "<b>E-mail: </b>"; 
										echo $row->email;
										echo "<br/>";
										echo "<b>Present Address : </b>"; 
										echo $row->present_adds;
										echo "<br/>";
										echo "<b>Permanent Address : </b>"; 
										echo $row->permanent_adds;
										echo "<br/>";
									}
								}
							}
							else{
								header("Location:login.php");
							}

							?>
						</p></li>
					</ul>
					<div class="rd-more">
					</div>
				</div>
				<div class="clear"></div>
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
