<!DOCTYPE html>
<?php
     if(session_id() == '') {
    session_start();
}
?>
<html lang="en">
<head>

     <title>Edit Details</title>

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

     <!---- Create Blog-start---@Niamul-->

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
                                   <h2>Edit Details</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">User Name</label>
                                        <input type="text" class="form-control" id="user" name="user" placeholder="User Name">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
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
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
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

    $name = $_POST['name'];
    $uname = $_POST['user'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

    $sql1  = "UPDATE `users` SET `name`='".$name."', `user_name`='".$uname."', `email_id`='".$email."', `phone_number`='".$phone."', `birth_date`='".$date."', `gender`='".$gender."' WHERE `Personid`='".$id."';";
    $result1=$conn->query($sql1);
    
    $sql='SELECT * FROM `users` WHERE `Personid`="'.$id.'";';
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        echo"<script>
        alert('Modification complete');
        window.location.href='user-profiles.php';</script>";
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

