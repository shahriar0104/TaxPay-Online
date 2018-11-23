<?php
require_once("connect.php");
$db=new Database();
$db->db_connect();
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$nid_no = $_SESSION['nid_no'];
?>
<html>
	<head>
		<title>Home</title>
	</head>
	<body>
		<a href='home.php'>Home</a>
		<a href='update.php'>Update Info</a>
		<a href='taxpay.php'>Pay Tax</a>
		<a href='record.php'>Record</a>
		<a  href='logout.php'>Log Out</a>

		<?php
			if($nid_no){
				echo "<br />Welcome to your account<br />";
				$result = mysql_query("SELECT * FROM biodata where nid_no = $nid_no");
					while ($row = mysql_fetch_array($result)){
					?>
					<?php
						echo "<h3><u>Personal Informations</u></h3>";
						?>
						<img src=images/".$row['image'].">
						<img src=<?php echo $row['image'];?> >
						<?php
						echo "<br/>";
						echo "<b>NID Number : </b>"; 
						echo $row['nid_no'];
						echo "<br/>";
						echo "<b>Name : </b>"; 
						echo $row['name'];
						echo "<br/>";
						echo "<b>Age : </b>"; 
						echo $row['age'];
						echo "<br/>";
						echo "<b>Father's name : </b>"; 
						echo $row['father'];
						echo "<br/>";
						echo "<b>Mather's Name : </b>"; 
						echo $row['mother'];
						echo "<br/>";
						echo "<b>Spouce's Name : </b>"; 
						echo $row['spouse'];
						echo "<br/>";
						echo "<b>Gender : </b>"; 
						echo $row['gender'];
						echo "<br/>";
						echo "<h3><u>Tax Informations</u></h3>";
						echo "<b>TIN Number : </b>"; 
						echo $row['tin'];
						echo "<br/>";
						echo "<b>Tax Region : </b>"; 
						echo $row['tax_region'];
						echo "<br/>";
						echo "<b>Tax Circle : </b>"; 
						echo $row['tax_circle'];
						echo "<br/>";
						echo "<h3><u>Contact Informations</u></h3>";
						echo "<b>Phone Number : </b>"; 
						echo $row['phone'];
						echo "<br/>";
						echo "<b>E-mail Address : </b>"; 
						echo $row['email'];
						echo "<br/>";
						echo "<b>Present Address : </b>"; 
						echo $row['present_adds'];
						echo "<br/>";
						echo "<b>Permanent Address : </b>"; 
						echo $row['permanent_adds'];
						echo "<br/>";

					}
				
			}
			else{
				header("Location:login.php");
			}
		?>
	</body>
</html>
<?php
// $sql2="SELECT sum(rate*quantity) as tot_sum FROM mamo where to_date='$to_date' and name='$name'";
// 	$result1=mysql_query($sql1);
// 	 while($row1=mysql_fetch_array($result1)){
// 		$ser_no=$row1['ser_no'];
// 		$item=$row1['item_name'];
// 		$rate=$row1['rate'];
// 		$quantity=$row1['quantity'];
// 		$price=$row1['price'];
// 		echo "<tr><td>$ser_no</td><td>$item</td><td>$rate</td><td>$quantity</td><td>$price</td>"
//         	
// 		
		
// 	}

?>