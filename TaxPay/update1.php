<?php
require_once("connect.php");
$db=new Database();
$db->db_connect();
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$nid_no = $_SESSION['nid_no'];
if($nid_no){

}
else{
	header("Location:login.php");
}
if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$email=$_POST['email'];
	$spouse=$_POST['Spouse'];
	$tax_region=$_POST['tax_region'];
	$tax_circle=$_POST['tax_circle'];
	$phone=$_POST['phone'];
	$age=$_POST['age'];
	$present_adds=$_POST['present_adds'];
	$permanent_adds=$_POST['permanent_adds'];
	if($name && $email && $tax_region && $tax_circle && $phone && $age && $present_adds && $permanent_adds){
	$sql="UPDATE biodata
			set name='$name', email='$email', spouse='$spouse', tax_region='$tax_region', tax_circle='$tax_circle', phone='$phone', present_adds='$present_adds', permanent_adds='$permanent_adds', age='$age'
			where nid_no=$nid_no";
	$result=mysql_query($sql);
	}
	else{
		header("Location:update.php");
	}
	
}
?>

<HTML>
	<head>
		<title>Update Info</title>
	</head>
	<body>

		<a href='home.php'>Home</a>
		<a href='update.php'>Update Info</a>
		<a href='taxpay.php'>Pay Tax</a>
		<a href='record.php'>Record</a>
		<a  href='logout.php'>Log Out</a>

		<form action="update.php" method="post">
          <table align="center">
			<tr><td>Name</td><td><input class="contact" type="text" name="name" value="" /></td></tr>
			<tr><td>Spouse's Name</td><td><input class="contact" type="text" name="spouse" value="" /></td></tr>
			<tr><td>Age</td><td><input class="contact" type="text" name="age" value="" /></td></tr>
			<tr><td>Tax Region</td><td><input class="contact" type="text" name="tax_region" value="" /></td></tr>
			<tr><td>Tax Circle</td><td><input class="contact" type="text" name="tax_circle" value="" /></td></tr>
			<tr><td>E-mail</td><td><input class="contact" type="text" name="email" value="" /></td></tr>
			<tr><td>Phone Number</td><td><input class="contact" type="text" name="phone" value="" /></td></tr>
			<tr><td>Present Address</td><td><input class="contact" type="text" name="present_adds" value="" /></td></tr>
			<tr><td>Permanent Address</td><td><input class="contact" type="text" name="permanent_adds" value="" /></td></tr>
			<tr><td><input class="submit" type="submit" name="submit" value="UPDATE" /></td><td></td></tr>
          </table>
        </form>
        
	</body>
</HTML>