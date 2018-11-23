<?php

error_reporting(E_ALL ^ E_NOTICE);
session_start();
$nid_no = $_SESSION['nid_no'];
?>
<html>
<head>
	<title>Log In</title>
</head>
<body>
	<p>Don't have account? <a href="signup.php">Sign Up</a> to Continue</p>
	<?php
	$form = "<form action='login.php' method='post'>
	<table>
	<tr>
	<td>NID Number : </td>
	<td><input type='text' name='nid_no'></td>
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
	if ($_POST['loginbtn']){
		$nid_no = $_POST['nid_no'];
		$pass = $_POST['pass'];

		if($nid_no) {
			if($pass){
				require_once("connect.php");
				$db=new Database();
				$db->db_connect();				//$pass = md5($pass);
				$query = mysql_query("SELECT * FROM customer_info where nid_no=$nid_no");
				$numrow = mysql_num_rows($query);
				if ($numrow == 1){
					$row = mysql_fetch_assoc($query);
					$dnid_no = $row['nid_no'];
					$dpass = $row['pass'];
					if($pass == $dpass){
						$_SESSION['nid_no'] = $dnid_no;
						header("Location:home.php");
					}
					else{
						echo "You didn't enter correct Password. $form";
					}
				}
				else{
					echo "The NID Number you entered was not found. $form";
				}
				mysql_close();
			}
			else{
				echo "You must enter your password. $form";
			}
		}
		else{
			echo "You must enter your nid_no. $form";
		}
	}
	else
		echo $form;
	?>
</body>
</html>