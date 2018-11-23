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
     <li class="active"><a href="taxpay.php">Pay Tax</a></li>
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
$form="<form action='taxpay.php' method='post' enctype='multipart/form-data'>
<div class='contact'>
<div class='contact-left'>
<h3>Income</h3>
<div class='table-form'>

<table>
<tr><td><input class='textbox' type='text' name='july' value='' placeholder='July : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='august' value='' placeholder='August : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='september' value='' placeholder='September : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='october' value='' placeholder='October : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='november' value='' placeholder='November : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='december' value='' placeholder='December : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='january' value='' placeholder='January : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='february' value='' placeholder='February : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='march' value='' placeholder='March : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='april' value='' placeholder='April : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='may' value='' placeholder='May : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='june' value='' placeholder='June : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='fitr' value='' placeholder='Fitr : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='adha' value='' placeholder='Adha : ' /></td></tr>
</table>
</div>
</div>
</div>
<div class='contact-right'>
<h3>Investments</h3>
<div class='table-form'>
<table>
<tr><td><input class='textbox' type='text' name='dsop' value='' placeholder='DSOP/Provident Fund : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='car' value='' placeholder='Car Tax : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='fdr' value='' placeholder='FDR : ' /></td></tr>
<tr><td><input class='textbox' type='text' name='laptop' value='' placeholder='Laptop : ' /></td></tr>
<tr><td><br /></td></tr>
<tr><td>Upload Income Bank Statement</td></tr>
<tr><td><br /></td></tr>
<tr><td><input type='file' name='totalIncome'></td></tr>
<tr><td><br /></td></tr>
<tr><td>Upload DSOP Statement</td></tr>
<tr><td><br /></td></tr>
<tr><td><input type='file' name='totalInvest'></td></tr>
<tr><td><br /></td></tr>
<tr><td>Upload Car Statement</td></tr>
<tr><td><br /></td></tr>
<tr><td><input type='file' name='payableTax'></div></td></tr>
<tr><td><br /></td></tr>
<tr><td>Upload FDR Statement</td></tr>
<tr><td><br /></td></tr>
<tr><td><input type='file' name='taxFree'></div></td></tr>
<tr><td><br /></td></tr>
<tr><td>Upload Laptop Statement</td></tr>
<tr><td><br /></td></tr>
<tr><td><input type='file' name='netPayable'></div></td></tr>

<tr><td><br /></td></tr>

<tr><td><input class='submit' type='submit' name='submit' value='Continue' /></td></tr>
</table>
</div>
</div>
<div class='clear'></div>
</div>
</div>
</form>";

if (isset($_POST['submit'] )&& !empty($_POST['submit'])){

         $image1=$_FILES['totalIncome']['name'];
         $file_ext = substr($image1, strripos($image1, '.'));
         $newImage1= date('Y_m_d')."_totalIncome".$file_ext;
         $image2=$_FILES['totalInvest']['name'];
         $file_ext = substr($image2, strripos($image2, '.'));
         $newImage2= date('Y_m_d')."_totalInvest".$file_ext;
         $image3=$_FILES['payableTax']['name'];
         $file_ext = substr($image3, strripos($image3, '.'));
         $newImage3= date('Y_m_d')."_payableTax".$file_ext;
         $image4=$_FILES['taxFree']['name'];
         $file_ext = substr($image4, strripos($image4, '.'));
         $newImage4= date('Y_m_d')."_taxFree".$file_ext;
         $image5=$_FILES['netPayable']['name'];
         $file_ext = substr($image5, strripos($image5, '.'));
         $newImage5= date('Y_m_d')."_netPayable".$file_ext;

  $january = $_POST['january'];
  $february = $_POST['february'];
  $march = $_POST['march'];
  $april = $_POST['april'];
  $may = $_POST['may'];
  $june = $_POST['june'];
  $july = $_POST['july'];
  $august = $_POST['august'];
  $september = $_POST['september'];
  $october = $_POST['october'];
  $november = $_POST['november'];
  $december = $_POST['december'];
  if($january && $february && $march && $april && $may && $june && $july && $august && $september && $october && $november && $december){
    $fitr = $_POST['fitr'];
    $adha = $_POST['adha'];
    $total = $january + $february + $march + $april + $may + $june + $july + $august + $september + $october + $november + $december +$fitr + $adha;
    echo "<div class='contact-left'>";
    echo "<b><h3>Calculations</h3></b><br/></div>";
    ?>
    <div class='table-form'>
      <table border="1px">
        <?php
        echo "<tr><td>Total Income : </td>";
        echo "<td>$total</td></tr>";
        $totalIncome=$total;
        $dsop = $_POST['dsop'];
        $car = $_POST['car'];
        $fdr = $_POST['fdr'];
        $laptop = $_POST['laptop'];
        $invest = $dsop + $car + $fdr + $laptop;
        echo "<tr><td>Total Investment : </td>";
        echo "<td>$invest</td></tr>";
        $totalInvest=$invest;
        $minus = 250000;
        $p = 15;
        $i = 10;
        $t = 100;
        $total = $total - $minus;
        $total = $total * $p;
        $total = $total / $t;

        echo "<tr><td>Payable Tax : </td>";
        echo "<td>$total</td></tr>";
        $payableTax=$total;

        $invest = $invest * $i;
        $invest = $invest / $t;
        echo "<tr><td>Tax Free Amount : </td>";
        echo "<td>$invest</td></tr>";
        $taxFree=$invest;

        $total = $total - $invest;

        if ($total < 5000) {
          $total = 5000;
        }

        echo "<tr><td>Net-Payable Tax : </td>";
        echo "<td>$total</td></tr>";
        $netPayable=$total;
        echo "</table></div>";

        ?>


          <form action="<?php echo $paypal_url; ?>" method = "post">
          <input type="hidden" name = "business" value = "<?php echo $paypal_id; ?>">
          <input type="hidden" name = "cmd" value = "_xclick">
          <input type="hidden" name = "nid_no" value = "<?php echo $row['nid_no']?>">
          <input type="hidden" name = "amount" value = "<?php echo $total?>">
          <input type="hidden" name = "currency_code" value = "USD">

          <?php
          $today = date('Y-m-d');

         // $target="uploadimages/".basename($_FILES['image']['name']);
         //$image_tmp=$_FILES['image']['tmp_name'];

          $result1 = "INSERT INTO recordall(nid_no, pay_date , total_income , total_invest , payable_tax , tax_free_amount , net_payable_tax , income_image , invest_image , payable_tax_image , tax_free_image , net_image) 
          VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";

          if(($stmt=$conn->prepare($result1))) {
            $stmt->bind_param("ssssssssssss",$nid_no , $today , $totalIncome , $totalInvest , $payableTax , $taxFree , $netPayable, $newImage1, $newImage2, $newImage3, $newImage4, $newImage5);

          } else {
            var_dump($conn->error);
          }
          if ($stmt->execute()) {
                move_uploaded_file($_FILES['totalIncome']['tmp_name'] , "uploadimages/".$newImage1);
                move_uploaded_file($_FILES['totalInvest']['tmp_name'] , "uploadimages/".$newImage2);
                move_uploaded_file($_FILES['payableTax']['tmp_name'] , "uploadimages/".$newImage3);
                move_uploaded_file($_FILES['taxFree']['tmp_name'] , "uploadimages/".$newImage4);
                move_uploaded_file($_FILES['netPayable']['tmp_name'] , "uploadimages/".$newImage5);
            }
          //$stmt->execute();
          $stmt->close();
          $delete = "DELETE FROM defaulters WHERE nid_no = '$nid_no';";
          $conn->query($delete);
          $conn->close();
          ?>
          <input type="submit" class="paynow" value="Pay Tax" name="submit" border="0">
        </form>


        <?php
      }
      else{
        echo "<br/><br/>You have to enter your salary for each month in specified fields. $form";
      }

    }
    else{
      echo $form;
    }


    ?>


    <?php include "footer.php"; ?>
</body>
</html>