<!DOCTYPE html>
<?php
     if(session_id() == '') {
    session_start();
}
?>
<html lang="en">
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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link
      rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/layout.css" />
    <link rel="stylesheet" href="css/blog.css" />
    <link rel="stylesheet" href="css/chooseus.css" />
    <link rel="stylesheet" href="css/service.css" />

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>
     <?php
     if(strcmp($_SESSION['user_name'], "admin")==0){
          include 'header-admin.php';}
     else{include 'header.php';}
     ?>

     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Let's make your life happier</h3>
                                             <h1>Healthy Living</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                                        </div>
                                   </div>
                              </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i class="fa fa-h-square"></i>ealth Center</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>"The doctor of the future will give no medication</p>
                                   <p>but will interest his patients in the care of the human frame, diet and in the cause and prevention of disease."</p>
                                   <p>-Thomas A. Edison (1847-1931)</p>
                              </div><br>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/author-image.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3><a href="https://www.facebook.com/nraiyan/">Syed Niamul Kazbe Rayian</a></h3>
                                        <p>General Editor</p>
                                   </figcaption>
                              </figure>
                              <br><br><br>
                              <a href="aboutus.php" class="section-btn btn btn-default smoothScroll">More Information</a><br><br>
                              <a href="index-chat.php" class="section-btn btn btn-default smoothScroll">Chat with Us</a>
                         </div>
                    </div>
               </div>
          </div>
     </section>


     <!-- DOCTORS -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s"><a href="doctors.php">Our Doctors</a></h2>
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
     </section>

     <!--Why-choose-us====@Wahidun==-->
<div class="why-choose-us">
      <h2>Why Choose Us?</h2>
      <div class="why-choose-us-container">
          <div class="child-section">
              <div class="icon"><i class="fa fa-check"></i></div>
              <div>
                  <span>Advance Care</span>
                  <p>Experience exceptional care tailored to your unique needs. Our dedicated team of specialists employs cutting-edge treatments and technologies to ensure your well-being and recovery.</p>

              </div>
             
          </div>
          <div class="child-section">
              <div class="icon"><i class="fa fa-check"></i></div>
              
              <div>
                  <span>Online Medicine</span>
                  <p>Conveniently access prescription medications from the comfort of your home. Our secure online platform provides a seamless experience, connecting you with trusted healthcare professionals and quality pharmaceuticals.</p>

              </div>
          </div>
          <div class="child-section">
              <div class="icon"><i class="fa fa-check"></i></div>
              <div>
                  <span>Medical & Surgical</span>
                  <p>Trust in our experienced medical and surgical team for comprehensive, personalized care. From routine check-ups to complex procedures, we prioritize your health and well-being every step of the way.</p>

              </div>
          </div>
          <div class="child-section">
              <div class="icon"><i class="fa fa-check"></i></div>
              <div>
                  <span>Lab Test's</span>
                  <p>Gain insights into your health with our state-of-the-art laboratory services. Our precise and efficient testing procedures deliver accurate results, enabling timely diagnoses and tailored treatment plans.</p>

              </div>
          </div>
      </div>
      
  </div>
    <!--end-->


     <!-- NEWS -->
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Latest News</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <rssapp-carousel id="te9HmX1HuWzbWqsJ"></rssapp-carousel><script src="https://widget.rss.app/v1/carousel.js" type="text/javascript" async></script>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <rssapp-carousel id="tAv2H6cOw50fooe8"></rssapp-carousel><script src="https://widget.rss.app/v1/carousel.js" type="text/javascript" async></script>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <rssapp-carousel id="tzoiS1znyD8GKHIB"></rssapp-carousel><script src="https://widget.rss.app/v1/carousel.js" type="text/javascript" async></script>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- MAKE AN APPOINTMENT -->
    <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="#">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Make an appointment</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Select Date</label>
                                        <input type="date" name="date" value="" class="form-control" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Select Department</label>
                                        <select class="form-control" id="select1" name="select1">
                                             <option value="General Health">General Health</option>
                                             <option value="Cardiology">Cardiology</option>
                                             <option value="Dental">Dental</option>
                                             <option value="Pediatrician">Pediatrician</option>                                             
                                        </select>
                                   </div>
                                   <?php
                                        require_once('connectsql.php');
                                        $query = "SELECT `name` FROM `doctors` 
                                                  ORDER BY `name` ASC";
     
                                        $result = $conn->query($query);
                                   ?>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Select Doctor</label>
                                        <select name="select_box" class="form-select" id="select_box">
                                             <option value="">Doctors</option>
                                             <?php 
                                             foreach($result as $row)
                                             {
                                                  echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
                                             }
                                             ?>  
                                        </select>
                                   </div>
                                   
                                   <script>
                                        var select_box_element = document.querySelector('#select_box');
                                        dselect(select_box_element, {
                                             search: true});
                                   </script>
                                   

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                                        <label for="Message">Additional Message</label>
                                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>

    <?php
    if(isset($_POST['submit'])){
        require_once('connectsql.php');

        $email=$_SESSION['emailid'];
        $password=$_SESSION['passwordid'];
        $user=$_SESSION['user_name'];
        $userid=$_SESSION['user_id'];

        $name=$_POST['name'];
        $emailid=$_POST['email'];
        $phone=$_POST['phone'];
        $date=$_POST['date'];
        $department=$_POST['select1'];
        $message=$_POST['message'];
        $doctor=$_POST['select_box'];

        /*$sql2="SELECT `Personid` FROM `users` WHERE user_name='".$user."' AND email_id='".$email."'";
        $result1=$conn->query($sql2);
        $userid=$result1->fetch_assoc();*/

        $sql3="SELECT `docid` FROM `doctors` WHERE `name`='".$doctor."'";
        $result2=$conn->query($sql3);
        $doctorid=$result2->fetch_assoc();

        $sql='INSERT INTO `appointments`(`userid`,`name`, `email_id`, `date`,`phone_number`, `department`, `message`, `doc_name`, `doc_id`, `pay_status`)
        VALUES ("'.$userid.'","'.$name.'","'.$emailid.'","'.$date.'","'.$phone.'","'.$department.'","'.$message.'","'.$doctor.'","'.$doctorid['docid'].'","Not Paid");';

        $conn->query($sql);
        $txnid = uniqid();
        $pstatus="Not Paid";

        $sql5="SELECT `user_id` FROM `payments` WHERE `user_id`='$userid' AND `payment_status`='Not Paid'";
        $result4=mysqli_query($conn, $sql5);
     if(mysqli_num_rows($result4)){
          include 'paymentcalc.php';
          $sql6="UPDATE `payments` SET `payment_amount`='".$sum."' WHERE `user_id`= '".$userid."';";
          $result5=$conn->query($sql6);
     }else{
          $sql4='INSERT INTO `payments`(`txnid`, `payment_amount`, `payment_status`, `user_id`) 
          VALUES ("'.$txnid.'","650","'.$pstatus.'","'.$userid.'");';
  
          $conn->query($sql4);}

        $sql1="SELECT * FROM `appointments` WHERE email_id='".$emailid."' AND name='".$name."';";
        

        $result=mysqli_query($conn, $sql1);
        if(mysqli_num_rows($result)==true){
            echo"<script>
            alert('Appointment Complete');
            alert('Proceed to payment');
            window.location.href='payment.php';</script>";
        }
        else{
            echo"<script>
            alert('Error');</script>";
        }
     }
    ?>


     <!-- GOOGLE MAP -->
     <br>
     <br>
     <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.097954059668!2d90.42298167621219!3d23.81511558628714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c103a8093%3A0xd660a4f50365294a!2sNorth%20South%20University!5e0!3m2!1sen!2sus!4v1692338580613!5m2!1sen!2sus" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>