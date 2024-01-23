<!DOCTYPE html>
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
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="rate.php">Rate</a></li>
          <li><a class="nav-link scrollto" href="locker.php">Locker</a></li>
		  <li><a class="nav-link scrollto" href="officer.php">Officer</a></li>
		  <li><a class="nav-link scrollto" href="payment.php">Payment</a></li>
		  <li><a class="nav-link scrollto" href="operation.php">Operate</a></li>
          <!--<li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>-->
          <!--<li><a class="nav-link scrollto" href="#team">Team</a></li>-->
          <!--<li><a href="blog.html">Blog</a></li>-->
          <!--<li class="dropdown"><a href="#"><span>Reports</span> <i class="bi bi-chevron-down"></i></a>-->
            <ul>
              <!--<li><a href="#">Rate</a></li>-->
              <!--<li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>-->
              <!--<li><a href="#">Locker</a></li>
              <li><a href="#">Officer</a></li>
              <li><a href="#">Operate </a></li>
			 <!-- <li><a href="#">Report</a></li>-->
			  <li class="dropdown"><a href="#"><span>Reports</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                 <!-- <li><a href="forms/customerreport.php">Customer Report</a></li>-->
                  <li><a href="lockerreport.php"> Locker Report</a></li>
                  <li><a href="officerreport.php">Officer Report</a></li>
                  <li><a href="ratereport.php">Rate Report</a></li>
                  <li><a href="paymentreport.php">Payment Report</a></li>
				  <li><a href="operationreport.php">Operation Report</a></li>
                </ul>
              </li>
            </ul>
          </li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="login.php" class="get-started-btn scrollto">LOGIN / SIGN UP&nbsp;</a>
    </div>
  </header><!-- End Header -->
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

<div class="container" data-aos="zoom-out" data-aos-delay="100">
  <div class="row">
    <div class="col-xl-12">
<?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$err8="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="Submit" || $_POST['sbm']=="Update")
{
if(empty($_POST['oc']))
{
$err1="<font color='red'>*Officer Code. must exist";
$fl=1;
}
if(empty($_POST['on']))
{
$err2="<font color='red'>*Officer Name must exist";
$fl=1;
}
if(empty($_POST['r']))
{
$err3="<font color='red'>*Gender must exist";
$fl=1;
}
if(empty($_POST['cno']))
{
$err4="<font color='red'>*Contact Number must exist";
$fl=1;
}
if(empty($_POST['em']))
{
$err5="<font color='red'>*email-ID must exist";
$fl=1;
}
if(empty($_POST['ad']))
{
$err6="<font color='red'>*Address must exist";
$fl=1;
}
if(empty($_POST['dg']))
{
$err7="<font color='red'>*Designation must exist";
$fl=1;
}
if(empty($_POST['ps']))
{
$err8="<font color='red'>*Password must exist";
$fl=1;
}
}
}
?>
<html>
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

            function valid2()
            {
                var x;
                x=event.keyCode;
                if((x>=65 && x<=90) || (x>=97 && x<=122))
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

            function valid3()
            {
                var x;
                x=event.keyCode;
                if((x>=65 && x<=90) || (x>=97 && x<=122)) || (x>=97 && x<=32)
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
                if ((x>=97 && x<=32) || (x>=48 && x<=57)||(x==95))
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
        <form name=frm method=post action=officer.php>
    <center>  
    </br> 
        
        <caption><h2>OFFICER INFORMATION </h2></caption> </br>  
        <table>
            <tr>   
                <td style="color:white">Officer code</td>
                <td><input type="number" name=oc onkeypress="return valid1()"><?php echo $err1;?></br></td>
            </tr>
            <tr>
                <td style="color:white"> Officer name</td>
                <td><input type="text" name=on onkeypress="return valid3()"><?php echo $err2;?></br></td>
        </tr>

        <tr>
            <td style="color:white">Gender</td>
            <td style="color:white"><input type=radio name=r value="Male" >Male
                  <input type=radio name=r value="Female" >Female
                 <input type=radio name=r value="Other" >Other <?php echo $err3;?></br></td>
        </tr>

        <tr>
            <td style="color:white">Contact Number</td>
            <td><input type="number" name=cno ><?php echo $err4;?></br></td>
        </tr>

        <tr>
            <td style="color:white">email ID</td>
            <td><input type="text" name=em placeholder ="xyz@example.com"><?php echo $err5;?></br></td>
        </tr>

        <tr>
           <td style="color:white">Address</td>
           <td><input type="text" name=ad><?php echo $err6;?></br></td>
        </tr>

       <tr>
           <td style="color:white"> Designation</td>
           <td><input type="text" name="dg"><?php echo $err7;?></br></td>
       </tr>

       <tr>
            <td style="color:white">Password</td>
            <td><input type=password name=ps onkeypress="return valid4()"><?php echo $err8;?></br></td>
        </tr>

        </table>
           
    </br>
        <!--buttons-->
        <input type=submit name=sbm value=Submit>
        <input type=submit name=sbm value=Update>  
        <input type=submit name=sbm value=Delete> 
        <input type=submit name=sbm value=Display>  
        <input type=submit name=sbm value=Search>
        <p style="margin-top:2%">
            <b style="color:white">Dhule and Nandurbar District Central Co-operative Bank Ltd. Dhule.</b>
        </p>
</center>        
</form>
</body>
</html>

<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("banklocker",$cn);
$sb=$_POST['sbm'];
if($sb=="Submit")
{
    if($fl==0) 
{    
$sql="insert into officer values('$_POST[oc]','$_POST[on]','$_POST[r]','$_POST[cno]','$_POST[em]','$_POST[ad]','$_POST[dg]','$_POST[ps]')";
mysql_query($sql,$cn);
echo "data stored";
}
}
else
if($sb=="Update")
{
    if($fl==0)
{    
$sql="update officer set officername='$_POST[on]',gender='$_POST[r]',contactnumber='$_POST[cno]',emailid='$_POST[em]',address='$_POST[ad]',designaton='$_POST[dg]','password='$_POST[ps]' where officercode='$_POST[oc]'";
mysql_query($sql,$cn);
echo "data updated";
}
}
else
if($sb=="Delete")
{
$sql="delete from officer  where officercode='$_POST[oc]'";
mysql_query($sql,$cn);
echo "data deleted";
}
else
if($sb=="Display")
{
echo "<center><table border=1>";
echo "<caption>officer information</caption>";
echo "<tr>";
echo "<th>officercode</th>";
echo "<th>officername</th>";
echo "<th>gender</th>";
echo "<th>contactnumber</th>";
echo "<th>emailid</th>";
echo "<th>address</th>";
echo "<th>designation</th>";
echo "<th>password</th>";

echo "</tr>";
$sql="select * from officer";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else
if($sb=="Search")
{
echo "<center><table border=1>";
echo "<caption>officer information</caption>";
echo "<tr>";
echo "<th>officercode</th>";
echo "<th>officername</th>";
echo "<th>gender</th>";
echo "<th>contactnumber</th>";
echo "<th>emailid</th>";
echo "<th>address</th>";
echo "<th>designation</th>";
echo "<th>password</th>";
echo "</tr>";
$sql="select * from officer where officercode='$_POST[oc]'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "</tr>";
}
echo "</table></center>";
}
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


