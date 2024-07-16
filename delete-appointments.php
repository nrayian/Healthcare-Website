<?php
	$id=$_GET['id'];
    require_once('connectsql.php');
	mysqli_query($conn,"DELETE FROM`appointments` WHERE `apid`='$id'");
	$sql='SELECT * FROM `appointments` WHERE `apid`="'.$id.'";';
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        echo"<script>
        alert('Deletion not complete');</script>";
    }
    else{
        echo"<script>
        alert('Deletion Complete');
        window.location.href='appointment-admin.php';</script>";
    }
?>