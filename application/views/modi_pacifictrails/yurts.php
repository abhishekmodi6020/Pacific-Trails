<!DOCTYPE html>
<html lang="en">
<!-- <head>
  <meta charset="utf-8" />
  <title>Pacific Trails Resort</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/pacific.css">
</head> -->
<!-- <head>
</head>
<body> -->
  <!-- <div id="wrapper">
    <div class="mainheader">
      <div class="row">
        <h1>Pacific Trails Resort</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-2 col-sm-2 col-xs-2 nopadding navigation">
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
          <img class="img-responsive" src="<?php echo base_url(); ?>asset/images/yurt.jpg">
          <div class="pad20px">
            <header>
              <h2>The Yurts at Pacific Trails</h2>
            </header>

            <dl>
              <dt>What is a yurt?</dt>
              <dd> Our luxury yurts are permanent structures four feet off the ground. Each yurt has canvas walls, wooden floor, and a roof dome that can be opened.</dd>
              <dt>How are the yurts furnished?</dt>
              <dd> Each yurt is furnished with queen-size bed with down quilt and gas-fired stove. The luxury camping experience also includes electricity and a sink with hot and cold running water. Shower and restroom facilites are located in the lodge.</dd>
              <dt>What should I bring?<br/></dt>
              <dd> Bring a sense of adventure and some time to relax! Most guests also pack comfortable walking shoes and plan to dress for changing weather with layers of clothing</dd>
            </dl>

            <p> <span class="boldblack">Yurt Packages</span><br>
              A variety of luxury yurt packages are available. Choose a package below and contact us to begin your reservation. We're happy to build a custom package just for you!
            </p>

          </div>
          <div class="table-responsive table">
            <?php

              // $connection=mysqli_connect('Localhost','root','','pacific');
              // $sql="SELECT packagename, packagedescription, ofnights, cost from package";
              // $records=mysqli_query($connection,$sql);
              echo "<table><center>
              <tr>
                <th>Package Name</th>
                <th>Description</th>
                <th>Nights</th>
                <th>Cost per person</th>
              </tr>";
              // while($row=mysqli_fetch_assoc($record))
              foreach ($allpackage as $pack)
              {
                echo "<tr><td>$pack->packagename</td>
          			<td class='text'>$pack->packagedescription</td>
                <td>$pack->ofnights</td>
          			<td>$pack->cost</td></tr>";
                }
                echo "</table></center>";
?>
            <!-- <table>
              <tr>
                <th>Package Name</th>
                <th>Description</th>
                <th>Nights</th>
                <th>Cost per person</th>
              </tr>
              <tr>
                <td>Weekend Escape</td>
                <td class="notcenter">Two breakfasts, a trail map, a picnic snack</td>
                <td>2</td>
                <td>$450</td>
              </tr>
              <tr>
                <td>Zen Retreat</td>
                <td class="notcenter">Four breakfasts, a trail map, a pass for daily yoga</td>
                <td>4</td>
                <td>$600</td>
              </tr>
              <tr>
                <td>Kayak Away</td>
                <td class="notcenter">Two breakfasts, two hours of kayak rental daily, a trail map</td>
                <td>2</td>
                <td>$500</td>
              </tr>
            </table> -->


          <!-- div table-responsive ending -->
          </div>
        </section>

        <!-- <footer>
          <p>
              Copyright &copy 2018 Pacific Trails Resort<br/>
              <a href = "mailto:abhishek@modi.com">abhishek@modi.com</a>
          </p>
        </footer> -->
      <!-- div col-10 ending -->
      <!-- </div> -->

    <!-- div row ending     -->
    <!-- </div> -->

  <!-- div id wrapper ending -->
  <!-- </div> -->
<!-- </body> -->
<!-- </html> -->
