<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require_once("db.php");
if (!session_id()) {
  session_start();
  $nid_no = $_SESSION['nid_no'];
}
if($nid_no){

}
else{
  header("Location:login.php");
}
if(isset($_POST['submit'])){

  $name=$_POST['name'];
  $email=$_POST['email'];
  $spouse=$_POST['spouse'];
  $tax_region=$_POST['tax_region'];
  $tax_circle=$_POST['tax_circle'];
  $phone=$_POST['phone'];
  $age=$_POST['age'];
  $present_adds=$_POST['present_adds'];
  $permanent_adds=$_POST['permanent_adds'];
  if($name && $email && $tax_region && $tax_circle && $phone && $age && $present_adds && $permanent_adds){
    $sql="UPDATE biodata
    set name=?, email=?, spouse=?, tax_region=?, tax_circle=?, phone=?, present_adds=?, permanent_adds=?, age=? where nid_no=$nid_no";

    if(($stmt=$conn->prepare($sql))) {
      $stmt->bind_param("sssssssss",$name,$email,$spouse,$tax_region,$tax_circle,$phone,$present_adds,$permanent_adds,$age);

    }else
    {
      var_dump($conn->error);
    }

    $stmt->execute();
    $stmt->close();
  }
  else{
    header("Location:update.php");
  }
  
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Update Form</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" media="all" />
  <link rel="stylesheet" href="css/bjqs.css">
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
  margin: 30px 0 20px 240px;
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
     <li class="active"><a href="update.php">Update Informations</a></li>
     <li><a href="taxpay.php">Pay Tax</a></li>
     <li><a href="record.php">Tax Record</a></li>
     <li><a href="netwealth.php">Net Wealth Record</a></li>
     <li><a href="logout.php">Log out</a></li>
   </ul>       
 </div>
 <div class="clear"></div>
</div>
</div>
<div class="clear"></div>
<div class="body-content">
  <div class="wrap">
    <!--<div class="slider">
     <div id="container">
      <div id="banner-fade">
        <ul class="bjqs">
         <li><img src="images/slide1.jpg" alt="" title=""></li>
         <li><img src="images/slide2.jpg"alt="" title=""></li>
         <li><img src="images/slide3.jpg" alt="" title=""></li> </ul>
       </div>
     </div>
   </div> -->
   <div class="contact">
     <div class="contact-left">
       <h3>update form</h3>
       <div class="table-form">
        <form action="update.php" method="post">
          <table>
            <tr><td><input class="textbox" type="text" name="name" value="" placeholder="Name : " /></td></tr>
            <tr><td><input class="textbox" type="text" name="spouse" value="" placeholder="Spouse's Name : " /></td></tr>
            <tr><td><input class="textbox" type="text" name="age" value="" placeholder="Age : " /></td></tr>
            <tr><td><input class="textbox" type="text" name="tax_region" value="" placeholder="Tax Region : " /></td></tr>
            <tr><td><input class="textbox" type="text" name="tax_circle" value="" placeholder="Tax Circle : " /></td></tr>
            <tr><td><input class="textbox" type="text" name="email" value="" placeholder="Email : " /></td></tr>
            <tr><td><input class="textbox" type="text" name="phone" value="" placeholder="Phone Number : " /></td></tr>
            <tr><td><input class="textbox" type="text" name="present_adds" value="" placeholder="Present Address : " /></td></tr>
            <tr><td><input class="textbox" type="text" name="permanent_adds" value="" placeholder="Permanent address : " /></td></tr>
            <tr><td><input class="submit" type="submit" name="submit" value="UPDATE" /></td></tr>
          </table>
        </form>
      </div>
    </div>
  </div>
  <div class="contact-right">
   <h3>contact info</h3>
   <div class="map">
    <iframe
    width="498"
    height="370"
    frameborder="0" style="border:0"
    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAh5jpr7IHA8rml6f_WGbwP3-rTT5k4vwE
    &q=MIST+Academic+Tower,Mirpur+WA" allowfullscreen>
  </iframe>
</div>	
<div class="grids">
	<h4>MIST CSE-15</h4>
	<span>SAD Sessional(Group 5)</span><br>
	<span>Land Phone: +88029007180</span>?<br>
	<span>Telephone: +8801629735079</span> <br>
	<span>FAX: +9901621128756</span><br>
	<span>email : efazdipon@gmail.com</span>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<?php include "footer.php"; ?>
</body>
</html>