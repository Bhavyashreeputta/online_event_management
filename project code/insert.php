<?php
session_start();
include 'config.php';

if(isset($_POST['submit']))
{
    
    $CLIENT_NAME = $_POST['name'];
    $EMAIL_ID = $_POST['email'];
    $ORD_DATE = $_POST['ord_date'];
    $EVENT_CODE = $_POST['event_name'];
    $SERVICE_ID = $_POST['service_name'];
    $EVENT_DATE = $_POST['event_date'];
    $LOCATION = $_POST['location'];
    $NO_DAYS = $_POST['n_ofdays'];

    $query = "INSERT INTO orders VALUES(NULL,'$CLIENT_NAME','$EMAIL_ID','$ORD_DATE','$EVENT_CODE','$SERVICE_ID','$EVENT_DATE','$LOCATION','$NO_DAYS')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo "Order Placed Succesfully";
        header("Location: orders_list.php");
    }
    else
    {
       echo "There was a issue in confirming your order";
       echo " Please Try Again ";
        header("Location: orders_list.php");
    }
}
?>