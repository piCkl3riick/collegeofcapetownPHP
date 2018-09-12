<?php
include_once 'include/registerUserQuery.php';
?>
<!DOCTYPE html>
<html>
<head>

<!DOCTYPE html>
<html>
<head>
	<title>Register User on College of Cape Town DBMS</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- Main css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet" type="text/css">
</head>
<body>
<!-- =========================
     NAVIGATION LINKS     
     ============================== -->
     <div class="navbar navbar-fixed-top custom-navbar" role="navigation">
      <div class="container">

        <!-- navbar header -->
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
          </button>

          <a  href="CollegeOfCapeTown.html"><img style=" height: 80px; width: 90px;" src="send/cOLLEGE OF CAPE TOW LOGO/LOGO.png" alt="CCptLogo"/></a>
        </div>

        <div class="collapse navbar-collapse">


        
                  </div>

                </div>
              </div>
<!-- =========================
   REGISTER SECTION   
   ============================== -->
   <section id="register" class="parallax-section">
      <div class="container">
         <div class="row">

            <div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s">
               <h2>Register User Account</h2>
               <h3></h3>
               <p></p>
            </div>

            <div class="wow fadeInUp col-md-5 col-sm-5" data-wow-delay="1s">
               <form action="RegisterUserQuery.php" method="POST">
                   <input name="username" type="text" class="form-control" id="username" placeholder="Username">
                  <input name="password" type="text" class="form-control" id="password" placeholder="Password">
                 
                  <div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
                     <input name="submit" type="submit" class="form-control" id="submit" value="REGISTER">
                  </div>
               </form>
            </div>

            <div class="col-md-1"></div>

         </div>
      </div>
   </section>
   <!-- =========================
    FOOTER SECTION   
    ============================== -->
    <footer>
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-sm-12">
            <p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2018 College of Cape Town| ISAT</p>

            <ul class="social-icon">
              <li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
              <li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
              <li><a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1.6s"></a></li>
              <li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li>
              <li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="2s"></a></li>
            </ul>

          </div>

        </div>
      </div>
    </footer>
<!-- =========================
     SCRIPTS   
     ============================== -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.parallax.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/custom.js"></script>
</body>
</html>