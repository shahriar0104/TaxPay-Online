<?php
require_once("connect.php");
$db=new Database();
$db->db_connect();
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$nid_no = $_SESSION['nid_no'];

$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
$paypal_id= 'efazdipon-receive@gmail.com';
?>

<html>
	<body>
		<table align="center">
			<tr>
				<?php
					$result = mysql_query("SELECT * FROM customer_info where $nid_no = nid_no");
					while ($row = mysql_fetch_array($result)){
				?>
				<td align="center">
					<img src="<?php echo $row['photo']; ?>" style="width: 210px; height: 210px;" /> <br/><br/>
					<?php echo $row['nid_no']; ?>
					<br/>
					<B><?php
						$sal = $row['salary'];
						$var=10;
						$var1=100;
						$sal = $sal * $var;
						$sal = $sal / $var1;
						echo $sal;
					?></B><br/><br/>
					<form action="<?php echo $paypal_url; ?>" method = "post">
						<input type="hidden" name = "business" value = "<?php echo $paypal_id; ?>">
						<input type="hidden" name = "cmd" value = "_xclick"> 
						<input type="hidden" name = "nid_no" value = "<?php echo $row['nid_no']?>">
						<input type="hidden" name = "amount" value = "<?php echo $sal?>">
						<input type="hidden" name = "currency_code" value = "USD">
			<?php
				$today = date('Y-m-d');
				$result1 = mysql_query("INSERT INTO `record`(`nid_no`, `amount`, `pay_date`) VALUES ($nid_no,$pay,'$today')");
			?>
						<input type="submit" class="paynow" value="Pay Tax" name="submit" border="0">
					</form>
				</td>
			<?php

				}
			?>
			</tr>
		</table>
	</body>
</html>