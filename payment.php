<?php

    include 'bkash/token.php';
    include 'paymentcalc.php';
    $amount=$sum;
    $_POST['amount']=$sum;
    
    $credentials_json = file_get_contents('bkash/config.json'); 
    $credentials_arr = json_decode($credentials_json,true);
    function create()
    {       
        getToken();
        global $credentials_arr;
        $post_token = array(
            'mode' => '0011',
            'amount' => $_POST['amount'] ? $_POST['amount'] : 1,
            'payerReference' => " ",
            'callbackURL' => "http://" . $_SERVER['SERVER_NAME']."/".basename(__DIR__)."/bkash/callback.php", // Your callback URL
            'currency' => 'BDT',
            'intent' => 'sale',
            'merchantInvoiceNumber' => 'Inv'.rand()
        );

        $url = curl_init($credentials_arr['base_url']."/checkout/create");
        $post_token = json_encode($post_token);
        $header = array(
            'Content-Type:application/json',
            'Authorization:'. $_SESSION["token"],
            'X-APP-Key:'. $credentials_arr['app_key']
        );

        curl_setopt($url, CURLOPT_HTTPHEADER, $header);
        curl_setopt($url, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($url, CURLOPT_POSTFIELDS, $post_token);
        curl_setopt($url, CURLOPT_FOLLOWLOCATION, 1);
        $result_data = curl_exec($url);
        curl_close($url);

        $response = json_decode($result_data, true);

        header("Location: ".$response['bkashURL']); 
        exit;
    }   
  

    if (isset($_POST['form_submitted'])){
        echo create(); 
    }
    
    ?>

<!DOCTYPE html>
<html lang="en">

<head>

     <title>Healthcare Payment</title>

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
     include 'header.php';
     ?>

    <!-- MAKE AN APPOINTMENT -->
    <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/payment-image.png" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="#">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Payment</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <h3><label for="name">Name: </label>
                                        <?php
                                        require_once('connectsql.php');
                                        $email=$_SESSION['emailid'];
                                        $password=$_SESSION['passwordid'];
                                        $user=$_SESSION['user_name'];
                                        $sql="SELECT `name` FROM `users` WHERE email_id='$email' AND user_name='$user' AND password='$password'";
                                        $result=$conn->query($sql);
                                        $name=$result->fetch_assoc();
                                        echo $name['name'];
                                        ?>
                                        </h3>
                                   </div>
                
                                   <div class="col-md-6 col-sm-6">
                                        <h3><label for="name">Email: </label>
                                        <?php
                                        require_once('connectsql.php');
                                        $email=$_SESSION['emailid'];
                                        $password=$_SESSION['passwordid'];
                                        $user=$_SESSION['user_name'];
                                        echo $email;
                                        ?>
                                        </h3>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date"><br><br>Date of Appointment: </label>
                                        <?php
                                        require_once('connectsql.php');
                                        $email=$_SESSION['emailid'];
                                        $password=$_SESSION['passwordid'];
                                        $user=$_SESSION['user_name'];
                                        $userid=$_SESSION['user_id'];
                                        $sql="SELECT `date` FROM `appointments` WHERE userid='$userid'";
                                        $result=$conn->query($sql);
                                        foreach($result as $row)
                                             {
                                                  echo '<option value="'.$row['date'].'">'.$row['date'].'</option>';
                                             }
                                        ?>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="name"><br>Status: </label>
                                        <?php
                                        $count=0;
                                        $sql="SELECT `date` FROM `appointments` WHERE userid='$userid' AND `pay_status`='Not Paid';";
                                        $result=mysqli_query($conn, $sql);
                                        $pstatus=$result->fetch_assoc();
                                        if(mysqli_num_rows($result)){
                                             foreach($result as $row){
                                                  $count+=1;
                                             }
                                             echo $count.' Not Paid';
                                        }else{
                                             echo 'All are paid';
                                        }
                                        ?>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="name"><br>Transaction ID: </label>
                                        <?php
                                        $sql="SELECT `txnid` FROM `payments` WHERE `user_id`='$userid' AND `payment_status`='Not Paid'";
                                        $result=$conn->query($sql);
                                        $txnid=$result->fetch_assoc();
                                        foreach($result as $row){
                                            echo '<option value="'.$row['txnid'].'">'.$row['txnid'].'</option>';
                                        }
                                        ?>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <h3><label for="name"><br>Total Amount: </label>
                                        <?php
                                        include 'paymentcalc.php';
                                        echo $sum.' TK';
                                        ?>
                                        <h3>
                                        <button type="submit" class="form-control" id="cf-submit" name="form_submitted" value="Pay With Bkash API">Pay With Bkash API</button>
                                        <button type="submit" class="form-control" id="cf-submit" name="submit2">Pay With Bkash QR Code</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>
     <?php
     if(isset($_POST['submit2'])){
        echo"<script>
            window.location.href='bkashqr.php';</script>";
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