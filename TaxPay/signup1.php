  <?php
  if (!session_id()) {
    session_start();
  }
  include_once ('db.php');

  $dnid_no=$_REQUEST['postNid'];
  $demail=$_REQUEST['postEmail'];
  $dpass=$_REQUEST['postPassword'];

  if ($dnid_no=="" || $dpass=="") {
    echo "3";// trying to stop null input
  }{

    $NidUnique=true;
    $sql="select nid_no from user;";
    $res=$conn->query($sql);
    while ($row=$res->fetch_assoc()) {
      if ($dnid_no===$row['nid_no']) {
        $NidUnique=false;
        break;          
      }         
    }
    if (!($NidUnique)) {

      echo "2";//username is not unique
    }else{

      echo "1";//registration complete
      $data=new Taxpay();
      $drand = rand(1000,9999);
      $var= $data->initialize($conn,$dnid_no,$demail,$dpass,$drand);

    }
  }


  class Taxpay
  {

    function initialize($conn,$dnid_no,$demail,$dpass,$drand)
    {

      $sql="insert into usertmp( nid_no, email, pass, rand, status) values(?,?,?,?,2);";

      if (($stmt=$conn->prepare($sql))
    ) {
        $stmt->bind_param("ssss",$nid_no,$email,$pass,$rand);


    }else
    {
      var_dump($conn->error);

    }

    $nid_no=$dnid_no;
    $pass=$dpass;
    $email=$demail;
    $rand=$drand;
    //$_SESSION['nid_no'] = $nid_no;
    $stmt->execute();
    $stmt->close();

    
    $retrive_email = $conn->query("SELECT email from usertmp where nid_no = '$nid_no';");
    $to = $retrive_email->fetch_object()->email;
    $subject = "User Activation";
    $message = "You Have pending request of ur id verification. Your Verification Code: ".$rand;
    $message .= "  Go to this Link for Verification http://localhost/TaxPay/index1.php";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header = "From:TaxPay.com \r\n";

    $retval = mail ($to,$subject,$message,$header);

    /*if ($retval == true) {
      echo "message sent succesfully";
    } else{
      echo "message can't be sent";
    }*/
    echo "1";
  }
}

?>