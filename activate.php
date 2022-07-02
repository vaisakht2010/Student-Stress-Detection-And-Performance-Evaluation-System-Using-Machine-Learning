<?php include('header_dashboard.php'); ?>


<?php
  
    // Connect to database 
  
    // Check if id is set or not if true toggle,
    // else simply go back to the page
    if (isset($_GET['t_id'])){
  
        $id=$_GET['id'];
        // Store the value from get to a 
        // local variable "course_id"
        $course_id=$_GET['t_id'];
  
        // SQL query that sets the status
        // to 1 to indicate activation.
        $sql="UPDATE `student` SET 
             `cgpa_status`=1 WHERE student_id='$course_id'";
  
        // Execute the query
        $r=mysqli_query($conn,$sql);
        if($r ){
            header('location: verify_cgpa.php?id='.$id);
        }

    }

    //header('location: verify_cgpa.php');
?>