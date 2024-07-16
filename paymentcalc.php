<?php
    require_once('connectsql.php');
    $sum=0;
    $email=$_SESSION['emailid'];
    $userid=$_SESSION['user_id'];
    $sql="SELECT `date` FROM `appointments` WHERE userid='$userid' AND `pay_status`='Not Paid';";
    $result=$conn->query($sql);
    foreach($result as $row)
    {
        $sum+=650;
    }
?>