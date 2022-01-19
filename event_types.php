<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <title>EVENTS</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" text="text/css" href="dashboard.css">
    </head>

    <body>
        <div class="navigation">
            <ul>
                <li>
                <div class="logo">
                        <img src="logo.png" alt="">
                    </div>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="event_types.php">
                        <span class="icon"><i class="fa fa-empire" aria-hidden="true"></i></i></span>
                        <span class="title">Events</span>
                    </a>
                </li>
                <li>
                    <a href="services.php">
                        <span class="icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></i></span>
                        <span class="title">Services</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-commenting" aria-hidden="true"></i></span>
                        <span class="title">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
        <h1>EVENTS ORGANISED</h1>
        <?php
    include 'config.php';
    $query = "SELECT * FROM EVENTS";
    $query_run = mysqli_query($conn, $query) or die("Query Unsuccessful."); 
    $check_events = mysqli_num_rows($query_run) > 0 ;

    if($check_events)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
            <div class="event_list">
                <div class="view_item">
                    <div class="left_view">
                        <?php 
                            echo '<img src="'.$row['EVENT_IMG'].'">'
                        ?>
                    </div>
                    <div class="right_view">
                        <p class="title"><?php echo $row['EVENT_NAME']; ?></p>
                        <p class="content"><?php echo $row['DESCRIPTION']; ?>
                        </p>
                    </div>
                    <div class="btn">
                        <a href="ordersform.php">Book Now</a>
                    </div>
                </div>
            </div>
        <?php 
        }
    }
    else {
        echo "NO EVENTS FOUND";
    }
    mysqli_close($conn)
    ?>
    </div>
    </body>
</html>