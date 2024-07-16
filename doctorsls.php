<?php
include("connectsql.php");
if(isset($_POST["input"])){
    $input = $_POST['input'];
    $query = "SELECT  *  FROM doctors WHERE name LIKE '{$input}%'  OR email_id LIKE '{$input}%' 
        OR phone_number LIKE '{$input}%' OR degree LIKE '{$input}%' OR hospital LIKE '{$input}%' 
        OR address LIKE '{$input}%' OR Specialist LIKE '{$input}%' LIMIT 3";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){        ?>
    <table class ="table table-bordered table-striped mt-4">
    <thread>
        <tr>
        
            <th>name</th>
            <th>email_id</th>
            <th>phone_number</th>
            <th>degree</th>
            <th>hospital</th>
            <th>address</th>
            <th>specialist</th>
            <th>about</th>
        </tr>
    </thread>
    <tbody>
        <?php   
        while($row = mysqli_fetch_assoc($result)){
           //Database fetched values stored in variables
            $name = $row['name'];
            $email_id = $row['email_id'];
            $phone_number= $row['phone_number'];
            $degree = $row['degree'];
            $hospital = $row['hospital'];
            $address = $row['address'];
            $specialist= $row['specialist'];
            $about = $row['about'];
            ?>
            <tr>
                
                <td> <?php echo$name;?></td>
                <td> <?php echo$email_id;?></td>
                <td> <?php echo$phone_number;?></td>
                <td> <?php echo$degree;?></td>
                <td> <?php echo$hospital;?></td>
                <td> <?php echo$address;?></td>
                <td> <?php echo$specialist;?></td>
                <td> <?php echo$about;?></td>
                
            </tr>
            <?php

        }
        ?>
    </tbody>

</table>


<?php
    }else{
        echo"<h6 class='text-danger text-center mt-3'>Not Found</h6>";

    }
}
?>