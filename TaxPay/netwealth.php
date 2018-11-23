<?php
require_once("db.php");
if (!session_id()) {
  session_start();
  $nid_no = $_SESSION['nid_no'];
}
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
$paypal_id= 'efazdipon-receive@gmail.com';
if($nid_no){

}
else{
  header("Location:login.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Tax Pay</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" media="all" />
  <link rel="stylesheet" href="css/bjqs.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery-1.7.1.min.js"></script>
  <script src="js/bjqs-1.3.min.js"></script>
  <script src="js/libs/jquery.secret-source.min.js"></script>

</head>

<style>
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

</style>

<body>
  <div class="header-bg">
    <div class="wrap">
     <div class="logo">
      <a href="index.html"><img src="images/logo.png" alt=""> </a>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="clear"></div>
<div class="nav1-bg">
  <div class="wrap">
   <div class="navhome"> 
    <ul>
     <li><a href="home.php">Home</a></li>
     <li><a href="update.php">Update Informations</a></li>
     <li><a href="taxpay.php">Pay Tax</a></li>
     <li><a href="record.php">Tax Record</a></li>
     <li class="active"><a href="netwealth.php">Net Wealth Record</a></li>
     <li><a href="logout.php">Log out</a></li>
   </ul>       
 </div>
 <div class="clear"></div>
</div>
</div>
<div class="clear"></div>
<div class="body-content">
  <div class="wrap">
<!--	<div class="slider">
	<div id="container">
 	<div id="banner-fade">
      <ul class="bjqs">
       <li><img src="images/slide1.jpg" alt="" title=""></li>
         <li><img src="images/slide2.jpg"alt="" title=""></li>
         <li><img src="images/slide3.jpg" alt="" title=""></li> </ul>
    </div>
	</div>
</div> -->

<?php
$form="<form action='netwealth.php' method='post'>
<div class='contact'>
<div class='contact-left'>
<div class='wealth-form'>
<table>
<tr><td><p>Land</p></td></tr>
<tr><td><p>Gold</p></td></tr>
<tr><td><p>Furniture</p></td></tr>
<tr><td><p>Electronic gadgets</p></td></tr>
<tr><td><p>Business Capital</p></td></tr>
<tr><td><p>Cash in Bank </p></td></tr>
</table>
</div>
</div>
</div>
<div class='contact-right'>
<div class='wealth-form'>
<table>
<tr><td><input class='textbox' type='text' name='landunit' value='' placeholder='unit : ' /> <input class='textbox' type='text' name='landvalue' value='' placeholder='value : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='goldunit' value='' placeholder='unit : ' /> <input class='textbox' type='text' name='goldvalue' value='' placeholder='value : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='furniturevalue' value='' placeholder='value : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='gadgetsvalue' value='' placeholder='value : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='capitalvalue' value='' placeholder='value : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='cashvalue' value='' placeholder='value : ' /></td></tr>

<tr><td><br /></td></tr>

<tr><td><input class='submit' type='submit' name='submit' value='Submit' /></td></tr>
</table>
</div>
</div>
<div class='clear'></div>
</div>
</div>
</form>";

if (isset($_POST['submit'] )&& !empty($_POST['submit'])) {

  $landunit = $_POST['landunit'];
  $landvalue = $_POST['landvalue'];
  $goldunit = $_POST['goldunit'];
  $goldvalue = $_POST['goldvalue'];
  $furniturevalue = $_POST['furniturevalue'];
  $gadgetsvalue = $_POST['gadgetsvalue'];
  $capitalvalue = $_POST['capitalvalue'];
  $cashvalue = $_POST['cashvalue'];
 
  if($landunit && $landvalue && $goldunit && $goldvalue && $furniturevalue && $gadgetsvalue && $capitalvalue && $cashvalue){
          $_SESSION['nid_no'] = $nid_no;
          $result1 = "INSERT INTO property(nid_no,landunit,landvalue,goldunit,goldvalue,furniturevalue,gadgetsvalue,capitalvalue,cashvalue) 
          VALUES (?,?,?,?,?,?,?,?,?);";

          if(($stmt=$conn->prepare($result1))) {
            $stmt->bind_param("sssssssss",$nid_no , $landunit,$landvalue,$goldunit,$goldvalue,$furniturevalue,$gadgetsvalue,$capitalvalue,$cashvalue);

          } else {
            var_dump($conn->error);
          }
          
          $stmt->execute();
          $stmt->close();

      }
      else{
        header("Location:netwealth.php");
      }

    }
    else{
      echo $form;
    }

    ?>
    
    <?php include "footer.php"; ?>
</body>
</html>