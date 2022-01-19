<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <title>EVENT MANAGEMENT SYSTEM</title>
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
                    <a href="#">
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
            <div class="header">
                <div class="search-box">
                    <form action="dashboard.php" method="GET">
                        <input class="search-txt" type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" placeholder="Search">
                        <button type="submit" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
                <?php
                    include 'config.php';

                    if(isset($_GET['search']))
                    {
                        $filtervalues = $_GET['search'];
                        $query = "SELECT * FROM events where CONCAT(EVENT_NAME) LIKE '%$filtervalues%' ";
                        $query_run = mysqli_query($conn, $query);
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $items)
                            {
                ?>
                                <div class="event_list">
                                    <div class="view_item">
                                        <div class="left_view">
                                            <?php 
                                                echo '<img src="'.$items['EVENT_IMG'].'">'
                                            ?>
                                        </div>
                                        <div class="right_view">
                                            <p class="title"><?php echo $items['EVENT_NAME']; ?></p>
                                            <p class="content"><?php echo $items['DESCRIPTION']; ?>
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
                        else { ?>
                        <div class="error-msg">
                           <p>Sorry we dont organize <b><?php echo $filtervalues ?></b></p>
                        </div>                    
                    <?php }
                    }
                    mysqli_close($conn)
                ?> 
        </div>
        <div class="dash-content">
        <h2 class="dash-title">OVERVIEW</h2>
                    <div class="dashboard-cards">
                        <div class="card-single">
                            <div class="card-body">
                                <span><i class="fa fa-wpforms" aria-hidden="true"></i></i></span>
                                <div>
                                    <h5>ORDERS</h5>
                                    <?php 
                                        include 'config.php';
                                        $query2 = "SELECT  ORDER_NO FROM orders ORDER BY ORDER_NO";
                                        $query2_run = mysqli_query($conn, $query2);

                                        $row = mysqli_num_rows($query2_run);

                                        echo '<h4 class="cardC1">'.$row.'</h4>';
                                    ?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="orders_list">View all</a>
                            </div>
                        </div>
                        <div class="card-single">
                            <div class="card-body">
                                <span><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                                <div>
                                    <h5>PAYMENTS</h5>
                                    <?php 
                                        include 'config.php';
                                        $query2 = "SELECT BILL_NO FROM invoice ORDER BY ORDER_NO";
                                        $query2_run = mysqli_query($conn, $query2);

                                        $row = mysqli_num_rows($query2_run);

                                        echo '<h4 class="cardC2">'.$row.'</h4>';
                                    ?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="invoice.php">View all</a>
                            </div>
                        </div>
                        <div class="card-single">
                            <div class="card-body">
                                <span><i class="fa fa-book" aria-hidden="true"></i></span>
                                <div>
                                    <h5>ORDERS HISTORY</h5>
                                    <?php 
                                        include 'config.php';
                                        $query2 = "SELECT T_ID FROM ordertriggers";
                                        $query2_run = mysqli_query($conn, $query2);

                                        $row = mysqli_num_rows($query2_run);

                                        echo '<h4 class="cardC3">'.$row.'</h4>';
                                    ?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="orderhist.php">View all</a>
                            </div>
                        </div>
                        <div class="card-single">
                            <div class="card-body">
                                <span><i class="fa fa-comments-o" aria-hidden="true"></i></span>
                                <div>
                                    <h5>REVIEWS</h5>
                                    <?php 
                                        include 'config.php';
                                        $query2 = "SELECT * FROM FEEDBACK";
                                        $query2_run = mysqli_query($conn, $query2);

                                        $row = mysqli_num_rows($query2_run);

                                        echo '<h4 class="cardC4">'.$row.'</h4>';
                                    ?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="feedback.php">View all</a>
                            </div>
                        </div>
                    </div>
        </div>
    </body>
</html>