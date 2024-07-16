<!DOCTYPE html>
<?php
     if(session_id() == '') {
    session_start();
}
?>
<html lang="en">
<head>

     <title>Our Blogs</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="Your blog description here">
    <meta name="keywords" content="keywords, for, your, blog">
    <meta name="author" content="Your Name">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Our Blog</title>


    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

 <!-- MAIN CSS -->
 <link rel="stylesheet" href="css/blog.css" />

 </head>
  <body 
         id="top"
         data-spy="scroll"
       data-target=".navbar-collapse"
       data-offset="50"
  >

  <?php
     if(strcmp($_SESSION['user_name'], "admin")==0){
      include 'header-admin.php';}
      else{include 'header.php';}
  ?>

     <!----Blog-start---@Wahidun-->

    <section class="blogs" id="blogs">
      <h1 class="heading">Our <span>blogs</span></h1>
      <div class="col-md-12 col-sm-12" align="center">
      <?php
        if(strcmp($_SESSION['user_name'], "admin")==0){
          echo '<a class="section-btn btn btn-default" href="blog-admin.php">Edit</a>';
        }
      ?>
      </div>
      <div class="box-container">
      <?php
        require_once('connectsql.php');

        $sql = "SELECT * FROM blogs ORDER BY date DESC;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='blog-post'>";
                echo "<h2>{$row['title']}</h2>";
                echo "<p>Date: {$row['date']}</p>";
                echo "<p>{$row['content']}</p>";
                echo "</div>";
            }
            } else {
                echo "<p>No blog posts available.</p>";
        }

        $conn->close();
      ?>
      </div>
    </section>
    <!---Blog-ends--@Wahidun--@Niamul>

    


     <!-- FOOTER -->
     <?php
     include 'footer.php';
     ?>

</body>
</html>

