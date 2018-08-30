<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Pacific Trails Resort</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/pacific.css">
</head>

<body>
  <div id="wrapper">
    <div class="mainheader">
      <div class="row">
        <h1>Pacific Trails Resort</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-sm-3 col-xs-3 nopadding navigation">
        <ul class="navUl">
          <li><a class="navli" href="index.php">Home</a></li>
          <li><a class="navli" href="yurts.php">Yurts</a></li>
          <li><a class="navli" href="activities.php">Activities</a></li>
          <li><a class="navli" href="reservations.php">Reservations</a></li>
          <li><a class="navli" href="myreservations.php">My Reservations</a></li>
          <li><a class="navli" href="shop.php">Shop</a></li>
        </ul>
      </div> -->

        <div class="col-lg-10 col-sm-10 col-xs-10 nopadding">

          <section>
            <div class="pad20px">
            <header>
              <h2>Shop at Pacific Trails</h2>
            </header>
            <div class="row">
              <div class="col-lg-3 col-sm-3 col-xs-3 mrg_top_bottom">
                <img src="<?php echo base_url(); ?>asset/images/trailguide.jpg" alt="">
              </div>
              <div class="col-lg-9 col-sm-9 col-xs-9">
                <p>
                  <span class="boldblack">Pacific trail Hiking Guide</span>
                </p>
                <p>
                  Guided hikes to the best trail around Pacific Trail Resort. Each hike includes a detailed route, distance, elevation change, and estimate time. 187 pages. Softcover. $19.95s
                </p>
                <form method="post"
                  action="<?php echo base_url();?>PacificController/cart">
                  <input type="hidden" name="desc1" id="desc1" value="Hiking Guide">
                  <input type="hidden" name="cost1" id="cost1" value="19.95">
                  <input type="submit" value="Add to Cart">
                </form>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-sm-3 col-xs-3 mrg_top_bottom">
                <img src="<?php echo base_url(); ?>asset/images/yurtyoga.jpg" alt="">
              </div>
              <div class="col-lg-9 col-sm-9 col-xs-9">
                <p>
                  <span class="boldblack">Yurt Yoga</span>
                </p>
                <p>
                  Enjoy the restorative process of yurt yoga in your own home. Each pose is illustrated with several photographs, an explanation, and a description of the restorative benifits. 206 pages. Softcover. $24.95s
                </p>
                <form method="post"
                  action="<?php echo base_url();?>PacificController/cart">
                  <input type="hidden" name="desc2" id="desc2" value="Yurt Yoga">
                  <input type="hidden" name="cost2" id="cost2" value="24.95">
                  <input type="submit" value="Add to Cart">
                </form>
              </div>
            </div>


            </div>
          </section>


      <!-- <footer>
        <p>
            Copyright &copy 2018 Pacific Trails Resort<br/>
            <a href = "mailto:abhishek@modi.com">abhishek@modi.com</a>
        </p>
      </footer>
      </div>
    </div>

</div>
</body>
</html> -->
