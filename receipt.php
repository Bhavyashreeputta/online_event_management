<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVOICE</title>
    <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bill.css">
</head>
<body>
    <div class="bill">
        <header class="bill-header"></header>
            <div class="bill-title">
                <h1 class="title">INVOICE</h1>
                <span class="logo"><img src="logo.png" alt=""></span>
            </div>
            <div class="addrs-date">
                <div class="caddress">
                    <h2 class="cname">BALLEN EVENTS</h2>
                    <p class="caddress"><i class="fa fa-building" aria-hidden="true"></i>
                    #32 2nd main, Bellandhur <br>Banaglore, Karnataka</p>
                    <p class="cphone"><i class="fa fa-phone-square" aria-hidden="true" style="padding-right: 3px;"></i>080-85412364/54123644</p>
                    <p class="cmail"><i class="fa fa-envelope" aria-hidden="true" style="padding-right: 3px;"></i>ballenevents@gmail.com</p>
                </div>
                <?php
                    include 'config.php';

                    if(isset($_GET['bill_n']))
                    {
                        $bill_no = $_GET['bill_n'];
                        $query = "SELECT * FROM invoice where BILL_NO = '$bill_no' ";
                        $query_run = mysqli_query($conn, $query);
                        if(mysqli_num_rows($query_run) > 0) {
                            while($row = mysqli_fetch_assoc($query_run)){
                                ?>
                            <div class="date-no">
                    <div class="bdate">
                        <p>DATE &nbsp;: &nbsp;<?php echo $row['BILL_DATE']; ?></p>
                    </div>
                    <div class="bno">
                        <p>Invoice NO &nbsp; : &nbsp; <?php echo $row['BILL_NO']; ?></p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="receipt-data">
                <div class="clientdetails">
                    <p>Name &nbsp; : &nbsp<?php echo $row['NAME']; ?> </p>
                    <p>Order NO  &nbsp : &nbsp;<?php echo $row['ORDER_NO']; ?></p>
                    <p>Event Code &nbsp : &nbsp;<?php echo $row['EVENT_CODE']; ?></p>
                    <p>Service ID &nbsp : &nbsp;<?php echo $row['SERVICE_ID']; ?></p>
                </div>
                <hr>
                <div>
                    <p>Total Amount &nbsp; : &nbsp; &#8377; &nbsp;<?php echo $row['TOTAL_AMOUNT']; ?></p>
                    <p>Advance Payment &nbsp; : &nbsp; &#8377; &nbsp;<?php echo $row['ADVANCE_PAYMENT']; ?></p>
                    <hr>
                    <p>Balance Amount &nbsp; : &nbsp; &#8377; &nbsp;<?php echo $row['BALANCE']; ?></p>
                </div>
            </div>
                     <?php           
                            }
                        }
                    }
                ?>
                
        <footer class="bill-footer"></footer>
    </div>
    <div class="linkpge">
    <a href="dashboard.php">Click -> HOME</a>
    </div>
</body>
</html>