<?php
include 'db.php';
if (!session_id()) {
  session_start();
  $nid_no = $_SESSION['nid_no'];
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
       <h3>Biodata form</h3>
       <br/>
       <img src="images/images.jpg" height="350px">
     </div>
     <div class="table-form">

      <form action='biodata.php' method='post' enctype="multipart/form-data">
       <?php
       $form="
       <input type='hidden' name='size' value='1000000'>
       <div>
       <input type='file' name='image'>
       </div>

       <table>
       <tr><td><input class='textbox' type='text' name='name' value='' placeholder='Name : '' /></td></tr>
       <tr><td><input class='textbox' type='text' name='father' value='' placeholder='Father's Name : ' /></td></tr>
       <tr><td><input class='textbox' type='text' name='mother' value='' placeholder='Mother's Name : ' /></td></tr>
       <tr><td><input class='textbox' type='text' name='gender' value='' placeholder='Gender : (Write M for Male & F for female)' /></td></tr>
       <tr><td><input class='textbox' type='text' name='spouse' value='' placeholder='Spouse's Name : ' /></td></tr>
       <tr><td><input class='textbox' type='text' name='age' value='' placeholder='Age : ' /></td></tr>
       <tr><td><input class='textbox' type='text' name='tin' value='' placeholder='Tin Number : ' /></td></tr>
       <tr><td><input class='textbox' type='text' name='tax_region' value='' placeholder='Tax Region : ' /></td></tr>
       <tr><td><input class='textbox' type='text' name='tax_circle' value='' placeholder='Tax Circle : ' /></td></tr>
       
       <tr><td><input class='textbox' type='text' name='phone' value='' placeholder='Phone Number : ' /></td></tr>
       <tr><td><input class='textbox' type='text' name='present_adds' value='' placeholder='Present Address : ' /></td></tr>
       <tr><td><input class='textbox' type='text' name='permanent_adds' value='' placeholder='Permanent address : ' /></td></tr>
       <tr><td><input class='submit' type='submit' name='submit' value='Submit' /></td></tr>
       </table>
       </form>";
       if($nid_no){
        if(isset($_POST['submit'] )&& !empty($_POST['submit'])){

         $target="uploadimages/".basename($_FILES['image']['name']);
         $image=$_FILES['image']['name'];
         $image_tmp=$_FILES['image']['tmp_name'];

         $query = $conn->query("SELECT email FROM usertmp where nid_no='$nid_no';");
         if ($data = $query->fetch_object()){
          $email=$data->email;
        }

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
        //$email = $_POST['email'];
        $present_adds = $_POST['present_adds'];
        $permanent_adds = $_POST['permanent_adds'];


        if($name && $father && $mother && $gender && $age){
          if($tin && $tax_region && $tax_circle){

            if($permanent_adds && $present_adds && $email && $phone){
              $_SESSION['nid_no'] = $nid_no;
              $query = "INSERT INTO biodata(image,nid_no, name, father, mother, spouse, gender, tin, email, tax_region,tax_circle,present_adds,permanent_adds, phone,age) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
              if(($stmt=$conn->prepare($query))) {
                $stmt->bind_param("sssssssssssssss",$image,$nid_no,$name,$father,$mother,$spouse,$gender,$tin,$email,$tax_region,$tax_circle,$present_adds,$permanent_adds,$phone,$age);

              } else {
                var_dump($conn->error);
              }
              if ($stmt->execute()) {
                if(move_uploaded_file($image_tmp, $target)){

                } else {

                }

                //header("Location:home.php");
              }
              $stmt->close();
              $query1 = "INSERT INTO defaulters (image,nid_no,name,gender,tax_region,tax_circle,phone,age) VALUES (?,?,?,?,?,?,?,?);";
              if(($defaulters_stmt=$conn->prepare($query1))) {
                $defaulters_stmt->bind_param("ssssssss",$image,$nid_no,$name,$gender,$tax_region,$tax_circle,$phone,$age);

              } else {
                var_dump($conn->error);
              }
              $defaulters_stmt->execute();
              $defaulters_stmt->close();

              header("Location:home.php");
            }
            else{
              echo "You didn't enter your contact info. $form";
            }
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
  </div>

</div>

</div>
<?php include "footer.php"; ?>
</body>
</html>