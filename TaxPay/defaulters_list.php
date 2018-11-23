<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require_once("db.php");
if (!session_id()) {
	session_start();
	$nid_no = $_SESSION['nid_no'];
}
if($nid_no){

}
else{
	header("Location:login1.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Approval Request</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" media="all" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/imagesingle.css">
	<link rel="stylesheet" href="css/bjqs.css">
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/bjqs-1.3.min.js"></script>
	<script src="js/libs/jquery.secret-source.min.js"></script>

	<link href="css/bootstrap.css" rel="stylesheet" />

	<!-- Font Awesome Css -->
	<link href="css/font-awesome.min.css" rel="stylesheet" />

	<!-- Bootstrap Select Css -->
	<link href="css/bootstrap-select.css" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="css/app_style.css" rel="stylesheet" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- DataTables CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
	
	<style>
	.cust-table {
		margin: 0px 0px;
	}
	.cust-table th {
		padding: 10px;
	}
	table.dataTable tr.odd {
		background-color: #fcfcfc;
	}
	table.dataTable tr.even td.sorting_1 {
		background-color: #ffffff;
	}
	table.dataTable.hover tbody tr:hover, table.dataTable.display tbody tr:hover {
		background-color: #ace0e0;
	}
</style>

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
					<li><a href="admin_home.php">Home</a></li>
					
					<li  class="active"><a href="defaulters_list.php">Defaulter's List</a></li>
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
		
		<div class="all-content-wrapper">

			<section class="container">
				<div class="form-group custom-input-space has-feedback">
					<div class="page-heading">
						<h3 class="post-title">Defaulters List whom have not Paid yet</h3>
					</div>
					<div class="page-body clearfix">
						<div class="row">
							<div class="col-md-offset-1 col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Defaulters List:</div>
									<div class="panel-body">

										<table id="post_list" class="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th>NID No</th>
													<th>Name</th>
													<th>gender</th>
													<th>Tax Region</th>
													<th>Tax Circle</th>
													<th>phone</th>
												</tr>
											</thead>

										</table>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
		</div>

		<!-- Jquery Core Js -->
		<script src="js/jquery.min.js"></script>

		<!-- Bootstrap Core Js -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Bootstrap Select Js -->
		<script src="js/bootstrap-select.js"></script>

		<!-- DataTables -->
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
		<script>

			$(document).ready(function(e){
				$('#post_list').dataTable({
					"bProcessing": true,
					"serverSide": true,
					"ajax":{
						url :"defaulters_json.php",
						type: "POST",
						error: function(){
							$("#post_list_processing").css("display","none");
						}
					}
				});
			});


		</script>


		


		<div class="grid-r"></div>
		<div class="rd-more"></div>
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
	
	<div class="clear"></div>
	<div class="footer-bg">
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
