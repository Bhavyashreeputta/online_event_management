<?php
    include 'config.php';
    $id = $_POST['order_no'];
    $name = $_POST['name'];
    $EVENT_CODE = $_POST['event_code'];
    $SERVICE_ID = $_POST['service_id'];
    $BILL_DATE = $_POST['bill_date'];
    $TOT_AMT = $_POST['tot_amt'];
    $A_PAY = $_POST['advance_pay'];
    $B_PAY = $_POST['balance_pay'];

    $query = "INSERT INTO invoice VALUES(NULL,'$id','$name','$EVENT_CODE','$SERVICE_ID','$BILL_DATE','$TOT_AMT','$A_PAY','$B_PAY')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        header("Location: invoice.php");
    ?>
    <script>alert("data inserted properly");</script>    
    <?php 
    }else{
    ?>
    <script>alert("data not inserted properly");</script>
    <?php
    }
    ?>
