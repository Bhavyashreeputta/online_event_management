<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="orders.css">
    <?php include 'header.php' ?>
    <title>ORDER BOOKING</title>
</head>
<body>
    <div class="main">
      <div class="formpage">
        <?php
            if(isset($_SESSION['status']))
            {
              echo "<h4>".$_SESSION['status']."</h4>";
              unset($_SESSION['status']);
            }
        ?>
          <form action="insert.php" method="POST">
          <h1>ORDER REGISTRATION</h1>
          <div class="form-elem">        
                    <div class="input-group">
                        <label for="name"><span>Name</span></label>
                        <br><input type="text" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="input-group">
                        <label for="email"><span>Email ID</span></label>
                        <br><input type="mail" name="email" id="email" placeholder="Email ID" required>
                    </div>
                    <div class="input-group">
                        <label for="ord_date"><span>Order Date</span></label>
                        <br><input type="date" name="ord_date" id="ord_date" required>
                    </div>
                    <div class="input-group">
                        <label for="evnt_date"><span>Event Date</span></label>
                        <br><input type="date" name="event_date" id="evnt_date" required>
                    </div>
                    <div class="input-group">
                        <label for="event">Event Name</label>
                        <br><select name="event_name" class="form-control">
                          <option value="">--Select Event--</option>
                          <option value="E001">WEDDING</option>
                          <option value="E002">Birthday Party</option>
                          <option value="E003">Fest</option>
                          <option value="E004">House Warming</option>
                          <option value="E005">Project Launch</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="service">Service Name</label>
                        <br><select name="service_name" class="form-control">
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
                        <br><input type="text" name="location" id="location" placeholder="Location" required>
                    </div>
                    <div class="input-group">
                        <label for="n_ofdays"><span>No Of Days</span></label>
                        <br><input type="number" name="n_ofdays" id="n_ofdays" placeholder="No Of Days" required>
                    </div>
                </div>
                <div class="submit-btn">
                    <button type="submit" name="submit" class="sbt-btn">SUBMIT</button>
                </div>
          </div>
        </form>
        </div>
</div>
</body>
</html>