<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment</title>
  <?php include 'links.php' ?>
  <link rel="stylesheet" href="bill.css">
</head>
<body style="background-color: white;">

<div class="container container2">
  <h2>FEEDBACK FORM</h2>
  <form action="forminsert.php" method="POST" class="form">
    <div class="form-group">
      <label for="name">NAME</label>
      <input type="text" class="form-control" id="name"  name="name" placeholder="Enter your name">
    </div>
    <div class="form-group">
        <label for="event_name">Event Name</label>
        <br><select name="event_name" class="form-control" id="event_name">
                          <option value="">--Select Event Name--</option>
                          <option value="WEDDING">WEDDING</option>
                          <option value="BIRTHDAY PARTY">BIRTHDAY PARTY</option>
                          <option value="FEST">FEST</option>
                          <option value="HOUSE WARMING">HOUSE WARMING</option>
                          <option value="PROJECT-LAUNCH">PROJECT-LAUNCH</option>
                        </select>
    </div>
    <div class="form-group">
      <label for="service_id">SERVICE ID</label>
      <select name="service_id" class="form-control" id="service_id">
                          <option value="">--Select SERVICE--</option>
                          <option value="S001">S001</option>
                          <option value="S002">S002</option>
                          <option value="S003">S003</option>
                          <option value="S004">S004</option>
                          <option value="S005">S005</option>
                          <option value="S005">S006</option>
                        </select>
    </div>
    <div class="form-group">
      <label for="rating">Rating</label>
      <input type="text" class="form-control" id="rating"  name="rating">
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" aria-label="With textarea" name="message"></textarea>
    </div>
    <button CLASS="btn btn-primary" name="fsubmit" style="margin-bottom: 50px;">SUBMIT</button>
  </form>
</div>
</body>
</html>