  <?php
  if (!session_id()) {
  	session_start();
  }
  include_once ('db.php');


  $nid_no=$_REQUEST['nid_no'];
  $pass=$_REQUEST['pass'];
  $code=$_REQUEST['code'];

  
  
  $query = $conn->query("SELECT * FROM usertmp where nid_no ='$nid_no' and pass='$pass' and rand='$code';");
  $account_type="";
  if ($data = $query->fetch_object()){
  	//$_SESSION['nid_no'] = $data->nid_no;
  	$account_type=$data->status;

    $sql="insert into user( nid_no, pass, status) values(?,?,2);";

      if (($stmt=$conn->prepare($sql))) {
        $stmt->bind_param("ss",$nid_no,$pass);
    } else {
      var_dump($conn->error);
    }

    $_SESSION['nid_no'] = $nid_no;
    
    $stmt->execute();
    $stmt->close();

  	if ($account_type ==="2"){
  		echo "2";
  	}
  }else{
  	echo "3";
  }

  ?>