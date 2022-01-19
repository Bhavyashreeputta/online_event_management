<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment</title>
  <?php include 'links.php' ?>
</head>
<body>
<div class="container" style="margin-top: 25px;">
  <h2 style="padding: 10px 0 15px 0">Payment information</h2>
  <form action="payinsert.php" method="POST" class="form">
  <?php
include 'config.php';
$pay_no=$_GET['pay_no'];
$sql="SELECT * FROM orders WHERE ORDER_NO = '$pay_no'";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
?>
    <div class="form-group">
      <label for="order_no">Order Number</label>
      <input type="text" class="form-control" id="order_no" value="<?php echo $row['ORDER_NO']; ?>" name="order_no" placeholder="Enter order number">
    </div>
    <div class="form-group">
      <label for="name">NAME</label>
      <input type="text" class="form-control" id="name" value="<?php echo $row['CLIENT_NAME'];?>" name="name" placeholder="Enter your name">
    </div>
    <div class="form-group">
      <label for="event_code">Event CODE</label>
      <input type="text" class="form-control" id="event_code" value="<?php echo $row['EVENT_CODE'];?>" name="event_code">
    </div>
    <div class="form-group">
      <label for="service_id">Service ID</label>
      <input type="text" class="form-control" id="service_id" value="<?php echo $row['SERVICE_ID'];?>" name="service_id">
    </div>
    <div class="form-group">
      <label for="bill_date">Bill Date</label>
      <input type="date" class="form-control" id="bill_date"  name="bill_date">
    </div>

    <div class="form-group">
      <label for="tot_amt">Total Amount</label>
      <input type="number" class="form-control" id="tot_amt"  name="tot_amt" placeholder="Enter the Total Amount">
    </div>
    <div class="form-group">
        <label for="advance_pay">Advance Paid</label>
        <input type="number" class="form-control" id="advance_pay" placeholder="Enter the advance amount to be paid by the client " name="advance_pay" >
    </div>
    <div class="form-group">
      <label for="balance_pay">Balance Amount</label>
      <input type="number" class="form-control" id="balance_pay"  name="balance_pay" placeholder="Enter Balance Amount">
    </div>
    <button CLASS="btn btn-primary" name="psubmit" style="margin-bottom: 50px;">SUBMIT</button>
    <?php
            }
            }
            ?>
  </form>
</div>
</body>
</html>