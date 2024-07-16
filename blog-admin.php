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

     <!---- Create Blog-start---@Niamul-->

    <section class="blogs" id="blogs">
      <h1 class="heading">Create <span>blogs</span></h1>

      <div class="box-container" width="400px">
      <div class="row">
      <div class="col-md-12 col-sm-12">
                         <img src="images/Class-blogs-02.png" class="img-responsive" alt="">
                    </div>
      <form id="appointment-form" role="form" method="post" action="#">
        <label for="name">Title</label><br>
        <input type="text" class="form-control" id="title" name="title" placeholder="Title" required><br><br>
        <label for="name">Author</label><br>
        <input type="text" class="form-control" id="author" name="author" placeholder="Author" required><br><br>
        <label for="name">Content</label><br>
        <textarea class="form-control" rows="5" id="content" name="content" placeholder="Content" required></textarea><br><br>
        <button type="submit" class="section-btn btn btn-default" id="cf-submit" name="submit">Submit</button></form>                       
        <?php
            if(isset($_POST['submit'])){
                require_once('connectsql.php');

                $text1=$_POST['title'];       
                $text2=$_POST['author'];
                $text3=$_POST['content'];
                $text4=date("Y-m-d",time());
                    
                $sql1='INSERT INTO `blogs`(`title`, `date`, `author`, `content`) VALUES ("'.$text1.'","'.$text4.'","'.$text2.'","'.$text3.'");';
                $result1=$conn->query($sql1);

                $sql4='SELECT * FROM `blogs` WHERE `title`="'.$text1.'" AND `author`="'.$text2.'" AND `content`="'.$text3.'";';
                $result=mysqli_query($conn, $sql4);
                if(mysqli_num_rows($result)==true){
                    echo"<script>
                    alert('Complete');</script>";
                }
                else{
                    echo"<script>
                    alert('Error');</script>";
                }
            }
        ?></div>
      </div>
    </section>
    <!---Blog-ends----@Niamul-->

    <!---- delete Blog-start---@Niamul-->

    <section class="blogs" id="blogs">
      <h1 class="heading">Delete <span>blogs</span></h1>

      <div class="box-container" width="400px">
      <div class="row">
      <form id="appointment-form" role="form" method="post" action="#"><br><br>
        <?php
            require_once('connectsql.php');
            $query = "SELECT `title` FROM `blogs` 
            ORDER BY `date` ASC";
                
            $result = $conn->query($query);
        ?>
        <div class="col-md-6 col-sm-6">
            <label for="select">Select Blog</label>
            <select name="select_box" class="form-select" id="select_box">    
        <?php 
            foreach($result as $row)
            {
            echo '<option value="'.$row["title"].'">'.$row["title"].'</option>';
            }
        ?>  
            </select><br><br>
            <button type="submit" class="section-btn btn btn-default" id="cf-submit" name="delete">Delete</button>
        </div>
                                   
        <script>
            var select_box_element = document.querySelector('#select_box');
            dselect(select_box_element, {
            search: true});
        </script>
        
        <?php 
            if(isset($_POST['delete'])){
                require_once('connectsql.php');

                $text1=$_POST['select_box'];
                    
                $sql2='DELETE FROM `blogs` WHERE `title`="'.$text1.'";';
                $result1=$conn->query($sql2);

                $sql3='SELECT * FROM `blogs` WHERE `title`="'.$text1.'";';
                $result=mysqli_query($conn, $sql3);
                if(mysqli_num_rows($result)==true){
                    echo"<script>
                    alert('Error');</script>";
                }
                else{
                    echo"<script>
                    alert('Complete');</script>";
                }
            }
        ?>
        </div>
        </div>
        </section>
    <!---Blog-ends----@Niamul-->

    


     <!-- FOOTER -->
     <?php
     include 'footer.php';
     ?>

</body>
</html>

