<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$nid_no = $_SESSION['nid_no'];
?>
<html>
<head>
	<title>Log Out</title>
</head>
<body>
	<?php
		if($nid_no){
			session_destroy();
			header("Location:index.php");
		}
		else{
			header("Location:index.php");
		}
	?>
</body>
</html>