<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$admin_no = $_SESSION['admin_no'];
?>
<html>
<head>
	<title>Log Out</title>
</head>
<body>
	<?php
		if($admin_no){
			session_destroy();
			header("Location:index.php");
		}
		else{
			header("Location:index.php");
		}
	?>
</body>
</html>