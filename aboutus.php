<!DOCTYPE html>
<?php
     if(session_id() == '') {
    session_start();
}
?>
<html lang="en">
<head>

     <title>Healthcare About Us</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">

     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/layout.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<?php
     if(strcmp($_SESSION['user_name'], "admin")==0){
          include 'header-admin.php';}
     else{include 'header.php';}
     ?>

     <!-- NEWS DETAIL -->
     <section id="news-detail" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
               <?php
                    if(strcmp($_SESSION['user_name'], "admin")==0){
                         echo '<a class="section-btn btn btn-default" href="aboutus_admin.php">Edit</a>';
                    }
               ?><br><br><br>

                    <div class="col-md-8 col-sm-7">
                         <!-- NEWS THUMB -->
                         <div class="news-detail-thumb">
                              <div class="news-image">
                                   <img src="images/about-us1.jpg" class="img-responsive" alt="">
                              </div>
                              <h3>
                              <?php
                                   require_once('connectsql.php');
                                   $sql="SELECT `title` FROM `aboutus`";
                                   $result=$conn->query($sql);
                                   $name=$result->fetch_assoc();
                                   echo $name['title'];
                              ?>
                              </h3>
                              <p><?php
                                   require_once('connectsql.php');
    
                                   $sql1="SELECT `desc1` FROM `aboutus`";
                                   $result1=$conn->query($sql1);
                                   $name1=$result1->fetch_assoc();
                                   echo $name1['desc1'];
                              ?></p>
                              <blockquote>
                              <?php
                                   require_once('connectsql.php');
    
                                   $sql1="SELECT `moto` FROM `aboutus`";
                                   $result1=$conn->query($sql1);
                                   $name1=$result1->fetch_assoc();
                                   echo $name1['moto'];
                              ?>
                              </blockquote>
                              <p><?php
                                   require_once('connectsql.php');
    
                                   $sql1="SELECT `desc2` FROM `aboutus`";
                                   $result1=$conn->query($sql1);
                                   $name1=$result1->fetch_assoc();
                                   echo $name1['desc2'];
                              ?> 
                              </p>
                              
                              <ul>
                                   <li>Syed Niamul Kazbe Rayian</li>
                                   <li>Wahidun Akter</li>
                                   <li>Rashedul Islam Tono</li>
                              </ul>

                              <p><?php
                                   require_once('connectsql.php');
    
                                   $sql1="SELECT `desc3` FROM `aboutus`";
                                   $result1=$conn->query($sql1);
                                   $name1=$result1->fetch_assoc();
                                   echo $name1['desc3'];
                              ?>
                              </p>
                              <div class="news-social-share">
                                   <h4>Share this article</h4>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>Facebook</a>
                                        <a href="#" class="btn btn-success"><i class="fa fa-twitter"></i>Twitter</a>
                                        <a href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i>Google+</a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-5">
                         <div class="news-sidebar">
                              <div class="news-author">
                                   <h4><?php
                                   require_once('connectsql.php');
    
                                   $sql1="SELECT `mentor_title` FROM `aboutus`";
                                   $result1=$conn->query($sql1);
                                   $name1=$result1->fetch_assoc();
                                   echo $name1['mentor_title'];
                              ?></h4>
                                   <p>CSE 482 Internet and Web Technology faculty is <a href="http://ece.northsouth.edu/people/md-naqib-imtiaz-hussain/">Dr.Md Naqib Imtiaz Hussain (NQH)</a> and the labratory instructor is Shabbir Ahmed.</p>
                              </div>

                              <div class="recent-post">
                                   <h4>Recent Posts</h4>

                                        <div class="media">
                                             <div class="media-object pull-left">
                                                  <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                             </div>
                                             <div class="media-body">
                                                  <h4 class="media-heading"><a href="#">Introducing a new healing process</a></h4>
                                             </div>
                                        </div>

                                        <div class="media">
                                             <div class="media-object pull-left">
                                                  <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                             </div>
                                             <div class="media-body">
                                                  <h4 class="media-heading"><a href="#">About Amazing Technology</a></h4>
                                             </div>
                                        </div>
                              </div>

                              <div class="news-categories">
                                   <h4>Categories</h4>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Dental</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Cardiology</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Health</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Consultant</a></li>
                              </div>

                              <div class="news-ads sidebar-ads">
                                   <h4>Sidebar Banner Ad</h4>
                              </div>

                              <div class="news-tags">
                                   <h4>Tags</h4>
                                        <li><a href="#">Pregnancy</a></li>
                                        <li><a href="#">Health</a></li>
                                        <li><a href="#">Consultant</a></li>
                                        <li><a href="#">Medical</a></li>
                                        <li><a href="#">Doctors</a></li>
                                        <li><a href="#">Social</a></li>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>
         


     <!-- FOOTER -->
     <?php
     include 'footer.php';
     ?>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/magnific-popup-options.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>