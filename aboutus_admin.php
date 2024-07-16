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
                              <p>
                                <form id="appointment-form" role="form" method="post" action="#">
                                <input type="text" class="form-control" id="desc1" name="desc1" value="This project aims to create a user-friendly and informative online platform that serves as a hub for a wide range of healthcare-related resources, services, and information. The website will cater to individuals seeking medical advice, health education, appointment scheduling, and a community for sharing experiences and insights. The primary objective of this project is to bridge the gap between healthcare providers, medical information, and the general public. By offering a user-centric website, we intend to empower users with the tools they need to make informed decisions about their health and well-being.">
                                
                            </p>
                              <blockquote>
                              <p>
                                <input type="text" class="form-control" id="moto" name="moto" value="One Team, One Dream!">
                                  </p>
                              </blockquote>
                              <p>
                                
                                <input type="text" class="form-control" id="desc2" name="desc2" value="The healthcare system is designed as a comprehensive web-based platform that facilitates efficient patient management, medical records storage, appointment scheduling, and communication between patients and healthcare providers. Our group-5 team members are:">
                                
                                   </p>
                              
                              <ul>
                                   <li>Syed Niamul Kazbe Rayian</li>
                                   <li>Wahidun Akter</li>
                                   <li>Rashedul Islam Tono</li>
                              </ul>

                              <p>
                                <input type="text" class="form-control" id="desc3" name="desc3" value="We are currently doing CSE 482 Internet and Web Technology course, where we are required to make a website which will show our merit and potential.">
                                <br>
                                <button type="submit" class="section-btn btn btn-default" id="cf-submit" name="Edit";>Edit</button>
                                   </p></form>

                                   <?php
                                   if(isset($_POST['Edit'])){
                                   require_once('connectsql.php');

                                   $text1=$_POST['desc1'];
    
                                   $sql1="UPDATE `aboutus` SET `desc1`='".$text1."'";
                                   $result1=$conn->query($sql1);

                                   $text2=$_POST['moto'];
    
                                   $sql2="UPDATE `aboutus` SET `moto`='".$text2."'";
                                   $result2=$conn->query($sql2);

                                   $text3=$_POST['desc2'];
    
                                   $sql3="UPDATE `aboutus` SET `desc2`='".$text3."'";
                                   $result3=$conn->query($sql3);

                                   $text4=$_POST['desc3'];
    
                                   $sql4="UPDATE `aboutus` SET `desc3`='".$text4."'";
                                   $result4=$conn->query($sql4);}
                              ?>
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