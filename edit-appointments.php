<!DOCTYPE html>
<?php
     if(session_id() == '') {
    session_start();
}
?>
<html lang="en">
<head>

     <title>Edit Appointment</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="Your blog description here">
    <meta name="keywords" content="keywords, for, your, blog">
    <meta name="author" content="Your Name">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

 <!-- MAIN CSS -->
 <link rel="stylesheet" href="css/blog.css" />

 </head>
  <body>
    <?php
    if(strcmp($_SESSION['user_name'], "admin")==0){
        include 'header-admin.php';}
        else{include 'header.php';}
    $id=$_GET['id'];
    ?>

     <!-- MAKE AN APPOINTMENT -->
    <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/admin.png" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="#">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Edit Appointment</h2>
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
                                   </script><br>                                   

                                   <div class="col-md-12 col-sm-12">
                                        <label for="select">Select Payment Status</label>
                                        <select class="form-control" id="select2" name="select2">
                                             <option value="Paid">Paid</option>
                                             <option value="Not Paid">Not Paid</option>                                             
                                        </select>
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
    <!---Blog-ends----@Niamul-->
    <?php
    if(isset($_POST['submit'])){
    require_once('connectsql.php');

        $name=$_POST['name'];
        $emailid=$_POST['email'];
        $phone=$_POST['phone'];
        $date=$_POST['date'];
        $department=$_POST['select1'];
        $message=$_POST['message'];
        $status=$_POST['select2'];
        $doctor=$_POST['select_box'];

    $sql1  = "UPDATE `appointments` SET `name`='".$name."',`email_id`='".$emailid."',`date`='".$date."',`phone_number`='".$phone."',`department`='".$department."',`message`='".$message."',`doc_name`='".$doctor."',`pay_status`='".$status."' WHERE `apid`= '".$id."';";
    $result1=$conn->query($sql1);
    
    $sql='SELECT * FROM `appointments` WHERE `apid`="'.$id.'";';
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        echo"<script>
        alert('Modification complete');
        window.location.href='appointment-admin.php';</script>";
    }
    else{
        echo"<script>
        alert('Invalid Modification');</script>";
    }
}
    ?>

    
     <!-- FOOTER -->
     <?php
     include 'footer.php';
     ?>

</body>
</html>

