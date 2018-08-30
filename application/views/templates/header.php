<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Pacific Trails Resort</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/pacific.css">
</head>
<body>
  <div id="wrapper">
    <div class="mainheader">
      <div class="row">
        <h1>Pacific Trails Resort</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-2 col-sm-2 col-xs-2 nopadding navigation">
        <ul class="navUl">
          <li><a class="navli" href="<?php echo base_url();?>PacificController/index">Home</a></li>
          <li><a class="navli" href="<?php echo base_url();?>PacificController/yurts">Yurts</a></li>
          <li><a class="navli" href="<?php echo base_url();?>PacificController/activities">Activities</a></li>
          <li><a class="navli" href="<?php echo base_url();?>PacificController/reservations">Reservations</a></li>
          <li><a class="navli" href="<?php echo base_url();?>PacificController/myreservations">My Reservations</a></li>
          <li><a class="navli" href="<?php echo base_url();?>PacificController/shop">Shop</a></li>
        </ul>
      </div>

</body>
</html>
