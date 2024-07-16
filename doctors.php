<!DOCTYPE html>
<?php
     if(session_id() == '') {
    session_start();
}
?>
<html lang="en">
<head>

     <title>Healthcare Doctors</title>

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

     <!-- DOCTORS -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">
               <a class="section-btn btn btn-default" href="doctorsearch.php">Search</a>

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/doctors/Prof.-Dr.-Nazir-Ahammed-Chowdhury.jpg" class="img-responsive" alt="" style="width:500px;height:500px;">
                                   <div class="team-info">
                                        <h3><a href="https://www.doctorbangladesh.com/prof-dr-nazir-ahammed-chowdhury-ronju/">
                                        <?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `name` FROM `doctors` WHERE docid=1";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        $doc1=$name;
                                        $_SESSION['doc1']=$name['name'];
                                        echo $name['name'];
                                        ?>
                                        </a></h3>
                                        <p><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `specialist` FROM `doctors` WHERE docid=1";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['specialist'];
                                        ?></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `phone_number` FROM `doctors` WHERE docid=1";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['phone_number'];
                                        ?></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#"><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `hospital` FROM `doctors` WHERE docid=1";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['hospital'];
                                        ?></a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>
                              </div>
                    </div>
                    

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/doctors/Prof.-Dr.-Ashok-Kumar-Dutta.jpg" class="img-responsive" alt="" style="width:500px;height:500px;">
                                   <div class="team-info">
                                        <h3><a href="https://www.doctorbangladesh.com/prof-dr-nazir-ahammed-chowdhury-ronju/">
                                        <?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `name` FROM `doctors` WHERE docid=2";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        $_SESSION['doc2']=$name['name'];
                                        echo $name['name'];
                                        ?>
                                        </a></h3>
                                        <p><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `specialist` FROM `doctors` WHERE docid=2";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['specialist'];
                                        ?></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `phone_number` FROM `doctors` WHERE docid=2";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['phone_number'];
                                        ?></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#"><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `hospital` FROM `doctors` WHERE docid=2";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['hospital'];
                                        ?></a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>
                              </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/doctors/Prof.-Dr.-M.-Nazrul-Islam.jpg" class="img-responsive" alt="" style="width:500px;height:500px;">
                                   <div class="team-info">
                                        <h3><a href="https://www.doctorbangladesh.com/prof-dr-nazir-ahammed-chowdhury-ronju/">
                                        <?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `name` FROM `doctors` WHERE docid=3";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        $_SESSION['doc3']=$name['name'];
                                        echo $name['name'];
                                        ?>
                                        </a></h3>
                                        <p><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `specialist` FROM `doctors` WHERE docid=3";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['specialist'];
                                        ?></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `phone_number` FROM `doctors` WHERE docid=3";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['phone_number'];
                                        ?></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#"><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `hospital` FROM `doctors` WHERE docid=3";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['hospital'];
                                        ?></a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>
                              </div>
                    </div>                 
               </div>
               <div class="row">
               <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/doctors/Dr.-Dhiman-Banik.jpg" class="img-responsive" alt="" style="width:500px;height:500px;">
                                   <div class="team-info">
                                        <h3><a href="https://www.doctorbangladesh.com/prof-dr-nazir-ahammed-chowdhury-ronju/">
                                        <?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `name` FROM `doctors` WHERE docid=4";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        $_SESSION['doc4']=$name['name'];
                                        echo $name['name'];
                                        ?>
                                        </a></h3>
                                        <p><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `specialist` FROM `doctors` WHERE docid=4";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['specialist'];
                                        ?></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `phone_number` FROM `doctors` WHERE docid=4";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['phone_number'];
                                        ?></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#"><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `hospital` FROM `doctors` WHERE docid=4";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['hospital'];
                                        ?></a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>
                              </div>
                    </div>
               

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/doctors/Dr.-Md.-Imran-Hossain.jpg" class="img-responsive" alt="" style="width:500px;height:500px;">
                                   <div class="team-info">
                                        <h3><a href="https://www.doctorbangladesh.com/prof-dr-nazir-ahammed-chowdhury-ronju/">
                                        <?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `name` FROM `doctors` WHERE docid=5";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['name'];
                                        ?>
                                        </a></h3>
                                        <p><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `specialist` FROM `doctors` WHERE docid=5";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['specialist'];
                                        ?></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `phone_number` FROM `doctors` WHERE docid=5";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['phone_number'];
                                        ?></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#"><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `hospital` FROM `doctors` WHERE docid=5";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['hospital'];
                                        ?></a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>
                              </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/doctors/Prof-Dr-bak-Azad.jpg" class="img-responsive" alt="" style="width:500px;height:500px;">
                                   <div class="team-info">
                                        <h3><a href="https://www.doctorbangladesh.com/prof-dr-nazir-ahammed-chowdhury-ronju/">
                                        <?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `name` FROM `doctors` WHERE docid=6";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['name'];
                                        ?>
                                        </a></h3>
                                        <p><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `specialist` FROM `doctors` WHERE docid=6";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['specialist'];
                                        ?></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `phone_number` FROM `doctors` WHERE docid=6";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['phone_number'];
                                        ?></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#"><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `hospital` FROM `doctors` WHERE docid=6";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['hospital'];
                                        ?></a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>
                              </div>
                    </div>
               </div>
               <div class="row">
               <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/doctors/Dr.-Momena-Begum.jpg" class="img-responsive" alt="" style="width:500px;height:500px;">
                                   <div class="team-info">
                                        <h3><a href="https://www.doctorbangladesh.com/prof-dr-nazir-ahammed-chowdhury-ronju/">
                                        <?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `name` FROM `doctors` WHERE docid=7";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['name'];
                                        ?>
                                        </a></h3>
                                        <p><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `specialist` FROM `doctors` WHERE docid=7";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['specialist'];
                                        ?></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `phone_number` FROM `doctors` WHERE docid=7";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['phone_number'];
                                        ?></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#"><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `hospital` FROM `doctors` WHERE docid=7";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['hospital'];
                                        ?></a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>
                              </div>
                    </div>
                    
     
                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/doctors/Dr.-Mahmuda-Zaman.jpg" class="img-responsive" alt="" style="width:500px;height:500px;">
                                   <div class="team-info">
                                        <h3><a href="https://www.doctorbangladesh.com/prof-dr-nazir-ahammed-chowdhury-ronju/">
                                        <?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `name` FROM `doctors` WHERE docid=8";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['name'];
                                        ?>
                                        </a></h3>
                                        <p><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `specialist` FROM `doctors` WHERE docid=8";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['specialist'];
                                        ?></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `phone_number` FROM `doctors` WHERE docid=8";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['phone_number'];
                                        ?></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#"><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `hospital` FROM `doctors` WHERE docid=8";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['hospital'];
                                        ?></a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>
                              </div>
                    </div>
     
                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/doctors/Prof.-Dr.-ATM-Atikur-Rahman.jpg" class="img-responsive" alt="" style="width:500px;height:500px;">
                                   <div class="team-info">
                                        <h3><a href="https://www.doctorbangladesh.com/prof-dr-nazir-ahammed-chowdhury-ronju/">
                                        <?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `name` FROM `doctors` WHERE docid=9";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['name'];
                                        ?>
                                        </a></h3>
                                        <p><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `specialist` FROM `doctors` WHERE docid=9";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['specialist'];
                                        ?></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `phone_number` FROM `doctors` WHERE docid=9";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['phone_number'];
                                        ?></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#"><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `hospital` FROM `doctors` WHERE docid=9";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['hospital'];
                                        ?></a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>
                              </div>
                    </div>
                    </div>
                    <div class="row">


                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/doctors/dr-haider-ali-khan.jpg" class="img-responsive" alt="" style="width:500px;height:500px;">
                                   <div class="team-info">
                                        <h3><a href="https://www.doctorbangladesh.com/prof-dr-nazir-ahammed-chowdhury-ronju/">
                                        <?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `name` FROM `doctors` WHERE docid=10";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['name'];
                                        ?>
                                        </a></h3>
                                        <p><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `specialist` FROM `doctors` WHERE docid=10";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['specialist'];
                                        ?></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `phone_number` FROM `doctors` WHERE docid=10";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['phone_number'];
                                        ?></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#"><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `hospital` FROM `doctors` WHERE docid=10";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['hospital'];
                                        ?></a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>
                              </div>
                    </div>
                    

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/doctors/Dr.-Sharmin-Akter-Liza.jpg" class="img-responsive" alt="" style="width:500px;height:500px;">
                                   <div class="team-info">
                                        <h3><a href="https://www.doctorbangladesh.com/prof-dr-nazir-ahammed-chowdhury-ronju/">
                                        <?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `name` FROM `doctors` WHERE docid=11";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['name'];
                                        ?>
                                        </a></h3>
                                        <p><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `specialist` FROM `doctors` WHERE docid=11";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['specialist'];
                                        ?></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `phone_number` FROM `doctors` WHERE docid=11";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['phone_number'];
                                        ?></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#"><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `hospital` FROM `doctors` WHERE docid=11";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['hospital'];
                                        ?></a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>
                              </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/doctors/Dr.-Most.-Asma-Khatun.jpg" class="img-responsive" alt="" style="width:500px;height:500px;">
                                   <div class="team-info">
                                        <h3><a href="https://www.doctorbangladesh.com/prof-dr-nazir-ahammed-chowdhury-ronju/">
                                        <?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `name` FROM `doctors` WHERE docid=12";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['name'];
                                        ?>
                                        </a></h3>
                                        <p><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `specialist` FROM `doctors` WHERE docid=12";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['specialist'];
                                        ?></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `phone_number` FROM `doctors` WHERE docid=12";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['phone_number'];
                                        ?></p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#"><?php
                                        require_once('connectsql.php');
                                        $sql="SELECT `hospital` FROM `doctors` WHERE docid=12";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['hospital'];
                                        ?></a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
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