<!DOCTYPE html>
<?php
     if(session_id() == '') {
    session_start();
}
?>
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
     <script src="library/bootstrap-5/bootstrap.bundle.min.js"></script>
     <script src="library/dselect.js"></script>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<?php
     if(strcmp($_SESSION['user_name'], "admin")==0){
          include 'header-admin.php';}
     else{include 'header.php';}
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