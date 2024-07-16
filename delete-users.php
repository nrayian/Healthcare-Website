<?php
	$id=$_GET['id'];
    require_once('connectsql.php');
	mysqli_query($conn,"DELETE FROM`users` WHERE `Personid`='$id'");
	$sql='SELECT * FROM `users` WHERE `Personid`="'.$id.'";';
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        echo"<script>
        alert('Deletion not complete');</script>";
    }
    else{
        echo"<script>
        alert('Deletion Complete');
        window.location.href='user-profiles.php';</script>";
    }
?>