<!DOCTYPE html>
<html lang="en">
<?php
     if(session_id() == '') {
    session_start();
}
?>
<head>

     <title>Healthcare Website</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/layout.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome, 
                    
                    <?php
                         require_once('connectsql.php');

                         $email=$_SESSION['emailid'];
                         $password=$_SESSION['passwordid'];
                         $user=$_SESSION['user_name'];
                         echo $user;
                         ?>
                    </p>
                    </div>     
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 017-190-87571</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 9:00 AM - 10:00 PM (Sat-Thu)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">syed.rayian@northsouth.edu</a></span>
                         <a href="logout.php">log out</a>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="home.php" class="smoothScroll">Home</a></li>
                         <li><a href="aboutus.php" class="smoothScroll">About Us</a></li>
                         <li><a href="doctors.php" class="smoothScroll">Doctors</a></li>
                         <li><a href="blog.php" class="smoothScroll">Blog</a></li>
                         <li><a href="payment.php" class="smoothScroll">Payment</a></li>
                         <li class="appointment-btn"><a href="appointment.php">Make an appointment</a></li>
                    </ul>
               </div>

          </div>
     </section>
</body>