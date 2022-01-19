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
        <h1 style="margin-top: 15px; color: gray">REVIEWS</h1>
        <div class="feedback-btn">
            <button class="feedback"><a href="feedbackforms.php">Give Feedback</a></button>
        </div>
        <div class="feedback-grid">

        <?php
    include 'config.php';
    $query = "SELECT * FROM feedback";
    $query_run = mysqli_query($conn, $query) or die("Query Unsuccessful."); 
    $check_events = mysqli_num_rows($query_run) > 0 ;

    if($check_events)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
                <div class="view_item">
                    <div class="top_view">
                        <div class = "cprofile">
                            <span class="pic"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                            <span class="cname"><?php echo $row['NAME']; ?>
                            </span>
                        </div>
                        <div class="rating">
                            <span><i class="fa fa-star" aria-hidden="true"></i>&nbsp;<?php echo $row['RATING']?></span>
                        </div>
                    </div>
                    <div class="bottom_view">
                        <div class="services">
                            <span>EVENT CODE &nbsp; : &nbsp;<?php echo $row['EVENT_NAME']; ?></span>
                            <br><span>SERVICE_ID &nbsp; : &nbsp;<?php echo $row['SERVICE_ID']; ?></span>
                        </div>
                        <div class="message">
                            <p style="width: 100%;"><?php echo $row['MESSAGE']; ?></p>
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
    </div>
    </body>
</html>