<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="en">
<head>

     <title>Healthcare Sign In</title>

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
     include 'header-login.php';
     ?>

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
                                   <h2>Sign In</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">

                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">User Name</label>
                                        <input type="text" class="form-control" id="user" name="user" placeholder="User Name" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                                        <label for="name">Password</label>
                                        <input type="text" class="form-control" id="password" name="password" placeholder="Password" required>
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

        $password=$_POST['password'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $user=$_POST['user'];

        $sql2="SELECT `Personid` FROM `users` WHERE user_name='".$user."' AND email_id='".$email."'";
        $result1=$conn->query($sql2);
        $userid=$result1->fetch_assoc();

        $sql3="SELECT * FROM `users` WHERE email_id='$email' AND user_name='$user' AND phone_number='$phone' AND password='$password'";

        $result=mysqli_query($conn, $sql3);
        if(mysqli_num_rows($result)==1){
          session_start();
          $_SESSION['emailid']=$_POST['email'];
          $_SESSION['user_name']=$_POST['user'];
          $_SESSION['user_id']=$userid['Personid'];
          $_SESSION['passwordid']=$_POST['password'];
          echo"<script>
            alert('Sign In successful');
            window.location.href='home.php';</script>";
        }
        else{
          echo"<script>
            alert('Incorrect email or password');
            window.location.href='index.php';</script>";
        }
     }
    ?>
         


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