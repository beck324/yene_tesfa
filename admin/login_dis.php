<?php
session_start();
error_reporting(0);
if(isset($_SESSION['user_id']))
  session_destroy();
$con= new mysqli("localhost","root","","amhara_hrm");
if(isset($_POST['save']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
$ret=mysqli_query($con,"SELECT * FROM user WHERE username='$username' and password='$password'");

$num=mysqli_fetch_array($ret);
if($num>0)
{
  session_start();
  $_SESSION['user_id']=$num[0]['id'];
header('location:index.php');
exit();
}
else
{
$_SESSION['errmsg']="Invalid username or password";
$extra="login_dis.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Amhara HRM</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

  <!-- Start your project here-->
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
    <a class="navbar-brand" href="index.html"><img src="logo.png" width="200px" height="55px"> 
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <h5 style="margin-left: 250px;"> <font color="#000"><a href="../index.php">Amhara Culture & Tourism Bureau HRM System</a></font></h5>
    <ul class="navbar-nav ml-auto">
   
    </ul>
  </div>
</nav>
<!--/.Navbar -->
<br><Br>
<div id="loader"></div>
<!-- Card -->
<div class="container col-md-5">
 <!-- Card -->
<div class="card">

    <!-- Card body -->
    <div class="card-body">

        <!-- Material form register -->
        <form  method="POST">
            <p class="h4 text-center py-4">Sign In</p>

            <!-- Material input text -->
<span style=" color:red; margin-left: 90px" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>

            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="text" id="materialFormCardEmailEx" name="username" class="form-control" required>
                <label for="materialFormCardEmailEx" class="font-weight-light">Your username</label>
            </div>
            <!-- Material input password -->
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input type="password" id="materialFormCardPasswordEx" name="password" class="form-control" required>
                <label for="materialFormCardPasswordEx" class="font-weight-light" >Your password</label>
            </div>

            <div class="text-center py-4 mt-3">
                <button type="submit" class="btn btn-default btn-lg btn-block" name="save" id="login" >Sign In</button>
            </div>
      

        </form>
        <!-- Material form register -->

    </div>

    <!-- Card body -->

</div>
<!-- Card --></div>
       <footer class="text-center py-4 mt-3" style="background-color: #c6ecef;margin-left: 30%;margin-right: 30%;border-radius:4px;    margin-bottom: 5px;">
                <p><?php echo date('Y');?>  All right Reserved &copy; </p>
            </footer>
<!-- Card -->
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

<script type="text/javascript">
   $("#login").on("click", function () {
   
          uservalidate();
          passvalidate();
   
         if (uservalidate() === true
          && passvalidate() === true
   
          ) {
   
   };
   
   
   });
   
   
   function uservalidate() {
   if ($('#materialFormCardEmailEx').val() == '') { 
       $('#materialFormCardEmailEx').css('border-color', '#dc3545');
    return false;
     } else {
      $('#materialFormCardEmailEx').css('border-color', '#28a745'); 
       return true;
   }
   
   };
   
   function passvalidate() {
   if ($('#materialFormCardPasswordEx').val() == '') { 
    $('#materialFormCardPasswordEx').css('border-color', '#dc3545');
    return false;
     } else {
      $('#materialFormCardPasswordEx').css('border-color', '#28a745'); 
       return true;
   }
   
   };
   
   
</script>
  <script src = "jss/jquery.js"></script>
  <script src = "jss/bootstrap.js"></script>
  <script src = "jss/login.js"></script>
  <script src="jquery.min.js"></script>
<script type="text/javascript">
  $(window).on('load', function(){
    //you remove this timeout
    setTimeout(function(){
          $('#loader').fadeOut('slow');  
      });
      //remove the timeout
      //$('#loader').fadeOut('slow'); 
  });
</script>
</html>
