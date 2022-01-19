<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDERS LIST</title>
    <link rel="stylesheet" href="orders.css">
    <?php include 'header.php' ?>
</head>
<body>
    <div id="main-content">
        <h2>ORDER DETAILS</h2>
        <?php
        include 'config.php';
        $sql = "SELECT * FROM orders ";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        if(mysqli_num_rows($result) > 0) {
        ?>
        <table cellpadding="5px">
        <thead>
        <th>ORDER NO</th>
        <th>CLIENT NAME</th>
        <th>EMAIL ID</th>
        <th>ORDER DATE</th>
        <th>EVENT DATE</th>
        <th>EVENT CODE</th>
        <th>SERVICE ID</th>
        <th>LOCATION</th>
        <th>NO OF DAYS</th>
        <th>Billing</th>
        <th>Operations</th>
        </thead>
        <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
        <td><?php echo $row['ORDER_NO']; ?></td>
        <td><?php echo $row['CLIENT_NAME']; ?></td>
        <td><?php echo $row['EMAIL_ID']; ?></td>
        <td><?php echo $row['ORD_DATE']; ?></td>
        <td><?php echo $row['EVENT_DATE']; ?></td>
        <td><?php echo $row['EVENT_CODE']; ?></td>
        <td><?php echo $row['SERVICE_ID']; ?></td>
        <td><?php echo $row['EVENT_LOCATION']; ?></td>
        <td><?php echo $row['NO_DAYS']; ?></td>
        <td><a href='payment.php?pay_no=<?php echo $row['ORDER_NO']; ?>' class="payment">Payment</a></td>
        <td class="links">
        <a href='update.php?update_no=<?php echo $row['ORDER_NO']; ?>' class="edit">Edit</a>
        <a href='delete.php?order_no=<?php echo $row['ORDER_NO']; ?>' class="delete">Delete</a>
        </td>
        </tr>
        <?php } ?>
        </tbody>
        </table>
        <?php }else{
        echo "<h2>No Record Found</h2>";
        }
        mysqli_close($conn);
        ?>
        </div>
        </div>    
</body>
</html>
