<?php
require_once("connect.php");
$db=new Database();
$db->db_connect();error_reporting(E_ALL ^ E_NOTICE);
session_start();
$nid_no = $_SESSION['nid_no'];
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
$paypal_id= 'efazdipon-receive@gmail.com';
if($nid_no){

}
else{
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tax Pay</title>
</head>
<body>

		<a href='home.php'>Home</a>
		<a href='update.php'>Update Info</a>
		<a href='taxpay.php'>Pay Tax</a>
		<a href='record.php'>Record</a>
		<a  href='logout.php'>Log Out</a>
	<?php
	$form="<form action='taxpay.php' method='post'>
		<h3><u>Monthly Income</u></h3>
		<table>
			<tr>
				<td>July : </td>
				<td><input type='text' name='july'></td>
			</tr>
			<tr>
				<td>August : </td>
				<td><input type='text' name='august'></td>
			</tr>
			<tr>
				<td>September : </td>
				<td><input type='text' name='september'></td>
			</tr>
			<tr>
				<td>October : </td>
				<td><input type='text' name='october'></td>
			</tr>
			<tr>
				<td>November : </td>
				<td><input type='text' name='november'></td>
			</tr>
			<tr>
				<td>December : </td>
				<td><input type='text' name='december'></td>
			</tr>
			<tr>
				<td>January : </td>
				<td><input type='text' name='january'></td>
			</tr>
			<tr>
				<td>February : </td>
				<td><input type='text' name='february'></td>
			</tr>
			<tr>
				<td>March : </td>
				<td><input type='text' name='march'></td>
			</tr>
			<tr>
				<td>April : </td>
				<td><input type='text' name='april'></td>
			</tr>
			<tr>
				<td>May : </td>
				<td><input type='text' name='may'></td>
			</tr>
			<tr>
				<td>June : </td>
				<td><input type='text' name='june'></td>
			</tr>
			<tr>
				<td>Eid Bonus(Eid-ul-Fitr) : </td>
				<td><input type='text' name='fitr'></td>
			</tr>
			<tr>
				<td>Eid Bonus(Eid-ul-Adha) : </td>
				<td><input type='text' name='adha'></td>
			</tr>
		</table>
		<h3><u>Investments</u></h3>
		<table>
			<tr>
				<td>DSOP/Providend Fund : </td>
				<td><input type='text' name='dsop'></td>
			</tr>
			<tr>
				<td>Car Tax : </td>
				<td><input type='text' name='car'></td>
			</tr>
			<tr>
				<td>FDR : </td>
				<td><input type='text' name='fdr'></td>
			</tr>
			<tr>
				<td>Laptop : </td>
				<td><input type='text' name='laptop'></td>
			</tr>

			<tr>
				<td></td>
				<td><input type='submit' name='submit' value='Submit'</td>
			</tr>
		</table>

	</form>";

if ($_POST['submit']){
	
		$january = $_POST['january'];
		$february = $_POST['february'];
		$march = $_POST['march'];
		$april = $_POST['april'];
		$may = $_POST['may'];
		$june = $_POST['june'];
		$july = $_POST['july'];
		$august = $_POST['august'];
		$september = $_POST['september'];
		$october = $_POST['october'];
		$november = $_POST['november'];
		$december = $_POST['december'];
	if($january && $february && $march && $april && $may && $june && $july && $august && $september && $october && $november && $december){
		$fitr = $_POST['fitr'];
		$adha = $_POST['adha'];
		$total = $january + $february + $march + $april + $may + $june + $july + $august + $september + $october + $november + $december +$fitr + $adha;
		echo "Total Income : ";
		echo $total;
		echo "<br/>";
		$dsop = $_POST['dsop'];
		$car = $_POST['car'];
		$fdr = $_POST['fdr'];
		$laptop = $_POST['laptop'];
		$invest = $dsop + $car + $fdr + $laptop;
		echo "Total Investment : ";
		echo $invest;
		echo "<br/>";
		$minus = 250000;
		$p = 15;
		$i = 10;
		$t = 100;
		$total = $total - $minus;
		$total = $total * $p;
		$total = $total / $t;

		echo "Payable Tax : ";
		echo $total;
		echo "<br/>";

		$invest = $invest * $i;
		$invest = $invest / $t;
		echo "Tax Free Amount : ";
		echo $invest;
		echo "<br/>";

		$total = $total - $invest;
		echo "Net-Payable Tax : ";
		echo $total;
		echo "<br/>";
	
?>

	
		<form action="<?php echo $paypal_url; ?>" method = "post">
			<input type="hidden" name = "business" value = "<?php echo $paypal_id; ?>">
			<input type="hidden" name = "cmd" value = "_xclick">
			<input type="hidden" name = "nid_no" value = "<?php echo $row['nid_no']?>">
			<input type="hidden" name = "amount" value = "<?php echo $total?>">
			<input type="hidden" name = "currency_code" value = "USD">

		<?php
				$today = date('Y-m-d');
				$result1 = mysql_query("INSERT INTO `record`(`nid_no`, `amount`, `pay_date`) VALUES ($nid_no,$total,'$today')");
		?>
			<input type="submit" class="paynow" value="Pay Tax" name="submit" border="0">
		</form>


<?php
}
	else{
		echo "<br/><br/>You have to enter your salary for each month in specified fields. $form";
	}

}
else{
	echo $form;
}


	?>
</body>
</html>