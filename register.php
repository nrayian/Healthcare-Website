<!DOCTYPE html>
<html lang="en">
<head>

     <title>Healthcare Registration</title>

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
                                   <h2>Registration</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">User Name</label>
                                        <input type="text" class="form-control" id="user" name="user" placeholder="User Name" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Date of Birth</label>
                                        <input type="date" name="date" value="" class="form-control">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Gender</label>
                                        <select class="form-control" id="gender" name="gender">
                                             <option value="male">Male</option>
                                             <option value="female">Female</option>
                                        </select>
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

        $name=$_POST['name'];
        $user=$_POST['user'];
        $phone=$_POST['phone'];
        $dob=$_POST['date'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        if(preg_match("/admin/", $_POST['password'])==1){
          echo"<script>alert('Password cannot be admin');</script>";
        }
        else{
          $password=$_POST['password'];
          $sql='INSERT INTO `users`(`name`, `user_name`, `email_id`, `phone_number`, `birth_date`, `gender`, `password`) 
               VALUES ("'. $name .'","'. $user .'","'.$email.'","'.$phone.'","'.$dob.'","'.$gender.'","'.$password.'");';

          $conn->query($sql);
        }

        $sql1="SELECT * FROM `users` WHERE email_id='".$email."' AND password='".$password."'";

        $result=mysqli_query($conn, $sql1);

        if(mysqli_num_rows($result)==1){
            echo"<script>
            alert('Registration complete');
            window.location.href='login.php';</script>";
        }
        else{
            echo"<script>
            alert('Invalid registration');</script>";
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