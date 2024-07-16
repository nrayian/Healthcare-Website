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
     >
     <script src="library/bootstrap-5/bootstrap.bundle.min.js"></script>
     <script src="library/dselect.js"></script>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <?php
        include 'header.php';
    ?>
    <br><br><br>
<table border="1" width="100%" cellspacing="0">
				<table width="30%" cellspacing="0" border="1" align="center">
					<tr height="25">
						<td align="center" colspan="2">
							This invoice is going to be expired within 48 hours
						</td>
					</tr>
					<tr height="50">
						<td align="center" colspan="2">
							<img src="images/bkash/image4.png">
						</td>
					</tr>
					<tr height="25">
						<td align="center" colspan="2">
							Pay from your personal bKash account.
						</td>
					</tr>
					<tr height="25">
						<td align="center" colspan="2">
							Health Center wallet: 019 06 599 331
						</td>
					</tr>
					<tr height="25">
						<td align="center" colspan="2">
							Or
						</td>
					</tr>
					<tr height="25">
						<td align="center" colspan="2">
							Scan QR code with bKash mobile app for faster payment
						</td>
					</tr>
					<tr height="100">
						<td align="center" colspan="2">
							<img src="images/bkash/qr.jpg" width="50%" height="50%">
						</td>
					</tr>
					<tr height="50">
						<td align="left" colspan="2">
							<h3>
                            <?php
                                include 'paymentcalc.php';
                                echo ' '.$sum.' TK in total';
                            ?></h3>
						</td>
					</tr>
					<tr height="50">
						<td align="left" colspan="2">
							Please remember:
							<ul>
								<li>Ours is a Personal Wallet​.</li>
								<li>Use reference number 1 and counter number 1</li>
							</ul>
						</td>
					</tr>
					<tr height="25">
						<td align="left" colspan="2">
							Enter your 13-digit bKash transaction ID and click Pay:
						</td>
					</tr>
				</table><br><br>
                <form align="center" role="form" method="POST" action="#">
							<input type="text" id="txnidpay" name="txnidpay">
                            <button type="submit" name="submit">Pay</button></form>
	
    <?php
        if(isset($_POST['submit'])){
            require_once('connectsql.php');
            $txnidpay=$_POST['txnidpay'];
            $sql="SELECT `txnid` FROM `payments` WHERE `user_id`='$userid' AND `payment_status`='Not Paid'";
            $result=$conn->query($sql);
            $txnid=$result->fetch_assoc();
            $txnid1=$txnid['txnid'];
            if(strcmp($txnid1, $txnidpay)==0){
                $sql3='UPDATE `payments` SET `payment_status`="Paid" WHERE `user_id`= '.$userid.' AND `txnid`= "'.$txnid['txnid'].'";';
                $result2=$conn->query($sql3);
                $sql4='UPDATE `appointments` SET `pay_status`="Paid" WHERE `userid`= '.$userid.';';
                $result3=$conn->query($sql4);
                $sql1="SELECT `payment_status` FROM `payments` WHERE `user_id`='$userid'";
                $result=$conn->query($sql1);
                $pstatus=$result->fetch_assoc();
                if(strcmp("Paid", $pstatus['payment_status'])==0){
                    echo"<script>
                    alert('Payment Complete');
                    window.location.href='payment.php';</script>";
                }
            }else{
                echo"<script>
                alert('Payment Not Complete');</script>";
            }
            
        }
    ?></table>

    <!-- FOOTER -->
    <?php
        include 'footer.php';
    ?>


    <!-- SCRIPTS -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/magnific-popup-options.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/smoothscroll.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/custom.js"></script>

</body>
</html>