<!DOCTYPE html>
<?php
     if(session_id() == '') {
    session_start();
}
?>
<html lang="en">
<head>

     <title>User Profiles</title>

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
     ?>

     <!---- Create Blog-start---@Niamul-->

    <section class="blogs" id="blogs">
      <h1 class="heading"><span>List of Appointments</span></h1>

      <div class="box-container">
      <div class="row">
      <table id="customers">
        <tr>
            <th>Appointment ID</th>
            <th>User ID</th>
            <th>Name</th>
            <th>Email ID</th>
            <th>Date</th>
            <th>Phone Number</th>
            <th>Department</th>
            <th>Message</th>
            <th>Doctor ID</th>
            <th>Doctor Name</th>
            <th>Payment Status</th>
            <th>Function 1</th>
            <th>Function 2</th>
        </tr>
        
            <?php
                require_once('connectsql.php');
                $query = "SELECT `apid`, `userid`, `name`, `email_id`, `date`, `phone_number`, `department`, `message`, `doc_id`, `doc_name`, `pay_status` FROM `appointments`                         
                          ORDER BY `apid` ASC";                       
     
                $result = $conn->query($query);
                foreach($result as $row){
                ?>
                <tr>
							<td><?php echo $row['apid']; ?></td>
							<td><?php echo $row['userid']; ?></td>
                            <td><?php echo $row['name']; ?></td>
							<td><?php echo $row['email_id']; ?></td>
							<td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['phone_number']; ?></td>
                            <td><?php echo $row['department']; ?></td>
							<td><?php echo $row['message']; ?></td>
                            <td><?php echo $row['doc_id']; ?></td>
							<td><?php echo $row['doc_name']; ?></td>
                            <td><?php echo $row['pay_status']; ?></td>
							<td><a href="edit-appointments.php?id=<?php echo $row['apid']; ?>" class="section-btn btn btn-blue">Edit</a></td>
                            <td><a href="delete-appointments.php?id=<?php echo $row['apid']; ?>" class="section-btn btn btn-gray">Delete</a>
							</td>
				</tr>
            <?php
                }
            ?>
        </table></div>
      </div>
    </section>
    <!---Blog-ends----@Niamul-->

    <!-- FOOTER -->
     <?php
     include 'footer.php';
     ?>

</body>
</html>

