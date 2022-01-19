<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" text="text/css" href="dashboard.css">
        <title>SERVICES</title>
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
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
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
            <h1>SERVICES OFFERED</h1>
            <div class="grid_view">
            <?php
        include 'config.php';
        $query = "SELECT * FROM SERVICES";
        $query_run = mysqli_query($conn, $query) or die("Query Unsuccessful."); 
        $check_service = mysqli_num_rows($query_run) > 0 ;

        if($check_service)
        {
            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                    <div class="view_item">
                        <div class="left_view">
                            <?php 
                                echo '<img src="'.$row['SERVICE_IMG'].'">';
                            ?>
                        </div>
                        <div class="right_view">
                            <p class="title"><?php echo $row['SERVICES_NAME']; ?></p>
                        </div>
                        <div class="btn">
                            <a href="ordersform.php">Book Now</a>
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
        </div>
    </body>

</html>