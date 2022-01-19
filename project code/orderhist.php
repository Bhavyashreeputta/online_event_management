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
<div class="main">
    <div id="main-content">
        <h2>ORDERS HISTORY</h2>
        <?php
        include 'config.php';
        $sql = "SELECT * FROM ordertriggers ";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        if(mysqli_num_rows($result) > 0) {
        ?>
        <table cellpadding="10px">
        <thead>
        <th>TID</th>
        <th>ORDER NO</th>
        <th>CLIENT NAME</th>
        <th>EMAIL ID</th>
        <th>ACTION</th>
        <th>TIMESTAMP</th>
        </thead>
        <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
        <td><?php echo $row['T_ID']; ?></td>
        <td><?php echo $row['order_no']; ?></td>
        <td><?php echo $row['CLIENT_NAME']; ?></td>
        <td><?php echo $row['Email']; ?></td>
        <td><?php echo $row['action']; ?></td>
        <td><?php echo $row['Timestamp']; ?></td>
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