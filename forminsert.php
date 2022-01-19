<?php
    include 'config.php';
    
    $name = $_POST['name'];
    $event_name = $_POST['event_name'];
    $SERVICE_ID = $_POST['service_id'];
    $rating = $_POST['rating'];
    $message = $_POST['message'];

    $query = "INSERT INTO feedback VALUES('$name','$event_name','$SERVICE_ID','$rating','$message')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        header("Location: feedback.php");
    ?>
    <script>alert("data inserted properly");</script>    
    <?php 
    }else{
    ?>
    <script>alert("data not inserted properly");</script>
    <?php
    }
?>