  <?php
  if (!session_id()) {
  	session_start();
  }
  include_once ('db.php');


  $nid_no=$_REQUEST['nid_no'];
  $pass=$_REQUEST['pass'];

  
  
  $query = $conn->query("SELECT * FROM user where nid_no ='$nid_no' and pass='$pass';");
  $account_type="";
  if ($data = $query->fetch_object()){
  	$_SESSION['nid_no'] = $data->nid_no;
  	$account_type=$data->status;

  	if (  $account_type === "1") {
  		echo "1";
  	}else if ($account_type ==="2"){
  		echo "2";
  	}
  }else{
  	echo "3";
  }

  ?>