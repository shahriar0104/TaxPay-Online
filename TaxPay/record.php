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
	header("Location:login.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" media="all" />
	<link href="css/imagezoom.css" rel="stylesheet" media="all" />
	<link rel="stylesheet" href="css/bjqs.css">
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/bjqs-1.3.min.js"></script>
	<script src="js/libs/jquery.secret-source.min.js"></script>

	<style>
	table {
		width:235%;
	}
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
	th, td {
		padding: 20px;
		text-align: left;
	}
	table#t01 tr:nth-child(even) {
		background-color: #eee;
		font-size: 12px;
	}
	table#t01 tr:nth-child(odd) {
		background-color: #fff;
		font-size: 12px;
	}
	table#t01 th {
		background-color: black;
		color: white;
		font-size: 15px;
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
			<div class="navhome"> 
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="update.php">Update Informations</a></li>
					<li><a href="taxpay.php">Pay Tax</a></li>
					<li class="active"><a href="record.php">Tax Record</a></li>
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
	<!--<div class="slider">
	<div id="container">
 	<div id="banner-fade">
      <ul class="bjqs">
      <li><img src="images/slide1.jpg" alt="" title=""></li>
      <li><img src="images/slide2.jpg" alt="" title=""></li>
      <li><img src="images/slide3.jpg" alt="" title=""></li> 
      </ul>
      
    </div>
	</div>
</div> -->
<div class="content-main">

	<div class='contact-left'>
		<div class='table-form'> 
			<table table id="t01" width="1000px">
				<tr>
					<th>Pay Date</th>
					<th>Total Income</th>
					<th>Total Invest</th>
					<th>Payable Tax</th>
					<th>Tax Free</th>
					<th>Net Payable</th>
					<th>Income document</th>
					<th>Invest docment</th>
					<th>Payable Tax document</th>
					<th>Tax Free document</th>
					<th>Net Payable document</th>
				</tr>
				<?php
				$count = 1;
				$result = $conn->query("SELECT * FROM recordapproved where nid_no = '$nid_no';");
				while ($row = $result->fetch_object()){
					$date = $row->pay_date;
					$totalIncome = $row->total_income;
					$totalInvest = $row->total_invest;
					$payableTax = $row->payable_tax;
					$taxFree = $row->tax_free_amount;
					$netPayable = $row->net_payable_tax;
					?>
					<tr>
						<td><center><?php echo $date; ?></center></td>
						<td><center><?php echo $totalIncome; ?></center> </td>
						<td><center><?php echo $totalInvest; ?></center></td>
						<td><center><?php echo $payableTax; ?></center> </td>
						<td><center><?php echo $taxFree; ?></center></td>
						<td><center><?php echo $netPayable; ?></center> </td>

						<?php 
						$file_ext = pathinfo($row->income_image);
						if ($file_ext["extension"] == "pdf") { ?>
							<td><center><a href= <?php echo "uploadimages/".$row->invest_image.""; ?> download="Income Doc">Income Doc</a></center> </td>
							<?php
						} else { ?>
							<td><center><img class="myImg" src=<?php echo "uploadimages/".$row->income_image.""; ?> width="40" height="50"></center> </td>
							<?php
						}
						?>

						<?php 
						$file_ext = pathinfo($row->invest_image);
						if ($file_ext["extension"] == "pdf") { ?>
							<td><center><a href=<?php echo "uploadimages/".$row->invest_image.""; ?> download="Invest Doc">Invest Doc</a></center> </td>
							<?php
						} else { ?>
							<td><center><img class="myImg" src=<?php echo "uploadimages/".$row->invest_image.""; ?> width="40" height="50"></center> </td>
							<?php
						}
						?>

						<?php 
						$file_ext = pathinfo($row->payable_tax_image);
						if ($file_ext["extension"] == "pdf") { ?>
							<td><center><a href=<?php echo "uploadimages/".$row->payable_tax_image.""; ?> download="Payable Tax Doc">Payable Tax Doc</a></center> </td>
							<?php
						} else { ?>
							<td><center><img class="myImg" src=<?php echo "uploadimages/".$row->payable_tax_image.""; ?> width="40" height="50"></center> </td>
							<?php
						}
						?>

						<?php 
						$file_ext = pathinfo($row->tax_free_image);
						if ($file_ext["extension"] == "pdf") { ?>
							<td><center><a href=<?php echo "uploadimages/".$row->tax_free_image.""; ?> download="Tax Free Doc">Tax Free Doc</a></center> </td>
							<?php
						} else { ?>
							<td><center><img class="myImg" src=<?php echo "uploadimages/".$row->tax_free_image.""; ?> width="40" height="50"></center> </td>
							<?php
						}
						?>

						<?php 
						$file_ext = pathinfo($row->net_image);
						if ($file_ext["extension"] == "pdf") { ?>
							<td><center><a href=<?php echo "uploadimages/".$row->net_image.""; ?> download="Net Tax Doc">Net Tax Doc</a></center> </td>
							<?php
						} else { ?>
							<td><center><img class="myImg" src=<?php echo "uploadimages/".$row->net_image.""; ?> width="40" height="50"></center> </td>
							<?php
						}
						?>

					</tr>

					<?php
					$count=$count+1;
				}
						//$count=1;
				?>

				<div id="myModal" class="modal">

					<!-- The Close Button -->
					<span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

					<!-- Modal Content (The Image) -->
					<img class="modal-content" id="img01">

					<!-- Modal Caption (Image Text) -->
					<div id="caption"></div>
				</div>

			</table>
		</div> 
	</div>
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
</div>
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

<script>
// Get the modal
var modal = document.getElementById('myModal');
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $('.myImg');
var modalImg = $("#img01");
var captionText = document.getElementById("caption");
$('.myImg').click(function(){
	modal.style.display = "block";
	var newSrc = this.src;
	modalImg.attr('src', newSrc);
	captionText.innerHTML = this.alt;
});
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}
</script>