!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Bank Locker System - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v3.7.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">BANK LOCKER SYSTEM</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            <ul>
            </ul>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    <!--  <a href="login.php" class="get-started-btn scrollto">LOGIN / SIGN UP&nbsp;</a>-->
    </div>
  </header><!-- End Header -->
   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center">

<div class="container" data-aos="zoom-out" data-aos-delay="100">
  <div class="row">
    <div class="col-xl-12">
    <head>
        <script language=javascript>
            function valid1()
            {
                var x;
                x=event.keyCode;
                if(x>=48 && x<=57)
                {
                event.keyCode=x;
                return true;
                }
                else 
                {
                event.keyCode=0;
                return false;
                }
            }

            function valid4()
            {
                var x;
                x=event.keyCode;
                if(x>=97 && x<=32) || (x>=48 && x<=57)||(x==95))
                 {
                event.keyCode=x;
                return true;
                }
                else   
                {  
                event.keyCode=0;
                return false;
                }
            }

         </script>
    </head>
<body>
<form name=frm method=post action=login.php>
    <center>
        <caption><h2>LOGIN</h2></caption><br>
        <table> 
        <tr>
            <td style="color:white">Customer ID</td>
            <td><input type=text name=ui onKeyPress="return valid1()"><Br></td>
         </tr>

        <tr>
             <td style="color:white">Password</td>
            <td><input type=password name=ps onKeyPress="return valid4()"><br></td>
        </tr>
</table> </br>
<input type=submit name=sbm value=GO><br>
<p><a href="https://www.new customer.com/">New Customer</a></p>
</center>
</form>
</body>
</html>

<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("biddingsystem",$cn);
$query="select count(*) from customer where customerid='$_POST[ui]' and password='$_POST[ps]'";
$row=mysql_query($query);
if($row[0]>0)
{
session_start();
$_SESSION['customerid']=$_POST['ui'];
header("location:http://localhost/bca/index1.html");
}
else
if($_POST['ui']=="admin" && $_POST['ps']=="admin")
header("location:http://localhost/bca/index2.html");
else
echo"<font color='red'>invalid customername and or password";
}
?>

     
    </div>
  </div>
</div>

</section><!-- End Hero -->
 

     <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
