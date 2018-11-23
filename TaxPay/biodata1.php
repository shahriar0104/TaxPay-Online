<?php

error_reporting(E_ALL ^ E_NOTICE);
session_start();
$nid_no = $_SESSION['nid_no'];
require_once("connect.php");
$db=new Database();
$db->db_connect();
?>
<?php
	?>
<html>
<head>
	<title>Biodata Fill up</title>
</head>
<body>
	
	<form action='biodata.php' method='post' enctype="multipart/form-data">
		<?php
		$form="
		<input type='hidden' name='size' value='1000000'>
		<div>
			<input type='file' name='image'>
		</div>
		<table>
			<tr>
				<td>Full Name : </td>
				<td><input type='text' name='name'></td>
			</tr>
			<tr>
				<td>Father's Name : </td>
				<td><input type='text' name='father'></td>
			</tr>
			<tr>
				<td>Mother's Name : </td>
				<td><input type='text' name='mother'></td>
			</tr>
			<tr>
				<td>Gender : </td>
				<td><input type='text' name='gender'></td>
				<td> (Write 'M' for Male & 'F' for female)</td>
			</tr>
			<tr>
				<td>Age : </td>
				<td><input type='text' name='age'></td>
			</tr>
			<tr>
				<td>Spouse Name : </td>
				<td><input type='text' name='spouse'></td>
			</tr>
			<tr>
				<td>Tin Number : </td>
				<td><input type='text' name='tin'></td>
			</tr>
			<tr>
				<td>Tax Region : </td>
				<td><input type='text' name='tax_region'></td>
			</tr>
			<tr>
				<td>Tax Circle : </td>
				<td><input type='text' name='tax_circle'></td>
			</tr>
			<tr>
				<td>E-mail : </td>
				<td><input type='text' name='email'></td>
			</tr>
			<tr>
				<td>Phone Number : </td>
				<td><input type='text' name='phone'></td>
			</tr>
			<tr>
				<td>Pressent Address : </td>
				<td><input type='text' name='present_adds'></td>
			</tr>
			<tr>
				<td>Permanent Address : </td>
				<td><input type='text' name='permanent_adds'></td>
			</tr>
			<tr>
				<td></td>
				<td><input type='submit' name='submit' value='Submit'</td>
			</tr>
		</table>";
if($nid_no){
	if ($_POST['submit']){
		$image = $_FILES['image']['name'];
		$target = "images/".basename($image);
		
		$name = $_POST['name'];
		$father = $_POST['father'];
		$mother = $_POST['mother'];
		$spouse = $_POST['spouse'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$tin = $_POST['tin'];
		$tax_region = $_POST['tax_region'];
		$tax_circle = $_POST['tax_circle'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$present_adds = $_POST['present_adds'];
		$permanent_adds = $_POST['permanent_adds'];

		if($name && $father && $mother && $gender && $age){
			if($tin && $tax_region && $tax_circle){
				
					if($permanent_adds && $present_adds && $email && $phone){
						$_SESSION['nid_no'] = $nid_no;
						$query = mysql_query("INSERT INTO `biodata`(`image`,`nid_no`, `name`, `father`, `mother`, `spouse`, `gender`, `tin`, `email`, `tax_region`, `tax_circle`, `present_adds`, `permanent_adds`, `phone`, `age`) VALUES ('$image',$nid_no,'$name','$father','$mother','$spouse','$gender',$tin,'$email','$tax_region','$tax_circle','$present_adds','$permanent_adds','$phone',$age)");
						// echo "<a href='biodata.php'>Click Here</a> to go to your account";
						header("Location:home.php");
					}
					else{
						echo "You didn't enter your contact info. $form";
					}
				
				mysql_close();
			}
			else{
				echo "You must enter your Tax informations. $form";
			}
		}
		else{
			echo "You must enter your Basic info. $form";
		}
	}
	else
		echo $form;
}
else{
	header("Location:signup.php");
}
	?>
	</form>
	
</body>
</html>