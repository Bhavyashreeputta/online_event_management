<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE FORM</title>
    <?php include 'header.php' ?>
    <link rel="stylesheet" href="orders.css">
</head>
<body>
<div class="main">
        <div class="updateform">
            <h1>ORDER UPDATION</h1>
                <div class="form-elem">
                    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <?php
if(isset($_POST['update']))
{
    $id=$_POST['order_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ord_date = $_POST['ord_date'];
    $event_date = $_POST['event_date'];
    $event_name = $_POST['event_name'];
    $service_name = $_POST['service_name'];
    $location = $_POST['location'];
    $no_ofdays = $_POST['n_ofdays'];
    include 'config.php';
    $sql = "UPDATE orders SET ORDER_NO = '{$id}', CLIENT_NAME = '{$name}', EMAIL_ID ='{$email}',
    ORD_DATE = '{$ord_date}', EVENT_CODE = '{$event_name}', SERVICE_ID = '{$service_name}', EVENT_DATE = '{$event_date}', 
    EVENT_LOCATION = '{$location}', NO_DAYS = '{$no_ofdays}' WHERE ORDER_NO = '{$id}'";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
    header("Location: orders_list.php");
    mysqli_close($conn);
}
?>
<?php
include 'config.php';
$update=$_GET['update_no'];
$sql="SELECT * FROM orders WHERE ORDER_NO = '$update'";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
?>
        
                    <div class="input-group">
                        <label for="order_id"><span>ORDER NO</span></label>
                        <br><input type="text" value="<?php echo $row['ORDER_NO']; ?>" name="order_id" placeholder="Name" required>
                    </div>
                    <div class="input-group">
                        <label for="name"><span>Name</span></label>
                        <br><input type="text" value="<?php echo $row['CLIENT_NAME']; ?>" name="name" placeholder="Name" required>
                    </div>
                    <div class="input-group">
                        <label for="email"><span>Email ID</span></label>
                        <br><input type="mail" name="email" value="<?php echo $row['EMAIL_ID']; ?>" placeholder="Email ID" required>
                    </div>
                    <div class="input-group">
                        <label for="ord_date"><span>Order Date</span></label>
                        <br><input type="date" name="ord_date" value="<?php echo $row['ORD_DATE']; ?>" required>
                    </div>
                    <div class="input-group">
                        <label for="evnt_date"><span>Event Date</span></label>
                        <br><input type="date" name="event_date" value="<?php echo $row['EVENT_DATE']; ?>" required>
                    </div>
                    <div class="input-group">
                        <label for="event_name">Event Name</label>
                        <br><select name="event_name" class="form-control" value="<?php echo $row['EVENT_CODE']; ?>" required>
                          <option value="">--Select Event--</option>
                          <option value="E001">Marriage</option>
                          <option value="E002">Birthday Party</option>
                          <option value="E003">Fest</option>
                          <option value="E003">House Warming</option>
                          <option value="E004">Project Launch</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="service_name">Service Name</label>
                        <br><select name="service_name" class="form-control" value="<?php echo $row['SERVICE_NAME']; ?>" required>
                          <option value="">--Select Event--</option>
                          <option value="S001">Catering</option>
                          <option value="S002">Photography</option>
                          <option value="S003">Design and Decor</option>
                          <option value="S004">Hotel/Venue Sourcing</option>
                          <option value="S005">Entertainment</option>
                          <option value="S006">Premium Package</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="location"><span>Event Location</span></label>
                        <br><input type="text" name="location" value="<?php echo $row['EVENT_LOCATION']; ?>" placeholder="Location" required>
                    </div>
                    <div class="input-group">
                        <label for="n_ofdays"><span>No Of Days</span></label>
                        <br><input type="number" name="n_ofdays" value="<?php echo $row['NO_DAYS']; ?>" placeholder="No Of Days" required>
                    </div>
                <!-- </div> -->
                <div class="submit-btn">
                    <button type="submit" name="update" class="sbt-btn">UPDATE</button>
                </div>
            <!-- </div>     -->
            <?php
            }
            }
            ?>
                </form>  
            </div>
        </div>
</div>    
</body>
</html>
