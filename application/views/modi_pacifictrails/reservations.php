<?php
  // $dbhost ="localhost";
  // $dbuser= "root";
  // $dbpass= "";
  // $dbname= "pacific";
  // $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // if(mysqli_connect_error()){
  //     die("Database connection failed".mysqli_connect_error());
  // }
?>

<?php
  // $fnameerror="";
  // $lnameerror="";
  // $emailerror="";
  // $phoneerror="";
  // $dateerror="";
  // $error = 1;
  //

  // $firstname=$_POST['firstname'];
  // $lastname =$_POST['lastname'];
  // $email=$_POST['email'];
  // $phone= $_POST['phone'];
  // $arrivaldate=$_POST['arrivaldate'];
  // $ofnights=$_POST['nights'];
  // $activities=$_POST['activities'];
  // $package=$_POST['package'];
  // $whendate=$_POST['when'];

  // if(isset($_POST['submit'])){
  //   // First name Validation
  //     if(empty($firstname)){
  //       $error = 0;
  //       $fnameerror="Please fill this field";
  //     }
  //     else {
  //       if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
  //         $error = 0;
  //         $fnameerror="Letters and white space only";
  //       }
  //     }
  //     // Last name validation
  //     if(empty($lastname)){
  //       $error = 0;
  //       $lnameerror="Please fill this field";
  //     }
  //     else {
  //       if (!preg_match("/^[a-zA-Z]*$/",$lastname)) {
  //         $error = 0;
  //         $lnameerror="Letters and white space only";
  //       }
  //     }
  //
  //     // Email validation
  //     if(empty($email)){
  //       $error = 0;
  //       $emailerror="Please fill this field";
  //     }
  //     else {
  //       $email = $_POST['email'];
  //       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //         $error = 0;
  //         $emailerror="Invalid Email format";
  //       }
  //     }
  //
  //     // Phone validation
  //     if (empty($_POST['phone'])) {
  // 			$error = 0;
  // 			$phoneerror = "Enter Phone Number";
  // 			} else if (strlen($_POST["phone"]) != '10') {
  //         	$phoneerror = "Phone Number should be 10 digits";
  //     		} else {
  // 			$phone = $_POST['phone'];
	// 	  }
  //
  //     // date error
  //     if(empty($arrivaldate)){
  //       $error=0;
  //       $dateerror= "Please select date";
  //     }
  //
  //     if($error==1){
  //       $query1="Insert into reservationyurt (arrivaldate,ofnights,packageid) Values('$arrivaldate','$ofnights','$package')";
  //       // echo $query1;
  //
  //       $result = mysqli_query($connection, $query1);
  //
  //       if($result){
  //           // echo "Data inserted";
  //       }else{
  //           // echo $query1;
  //           die("Insert failed".mysqli_error($connection));
  //       }
  //
  //       $query2= "Insert into client(fname,Lname,phone,email,resid,activityid) Values ('$firstname', '$lastname','$phone','$email',LAST_INSERT_ID(),'$activities')";
  //       // echo $query2;
  //       $result = mysqli_query($connection, $query2);
  //       if($result){
  //           // echo "Data inserted";
  //       }else{
  //           echo $query2;
  //           die("Insert failed".mysqli_error($connection));
  //       }
  //
  //       $query3="Insert into whendate(date,activityid,clientid)   Values('$whendate','$activities',LAST_INSERT_ID())";
  //       // echo $query3;
  //       $result = mysqli_query($connection, $query3);
  //       if($result){
  //           // echo "Data inserted";
  //       }else{
  //           echo $query3;
  //           die("Insert failed".mysqli_error($connection));
  //       }
  //
  //
  //     }
  //
  //   }

?>

<!-- <html lang="en">
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
        <div class="pad20px">
          <header>
            <h2>Reservations at Pacific Trails</h2>
          </header>
          <!-- <form class="form-horizontal" method="post" action="reservations.php"> -->
          <?php echo form_open('PacificController/reservationsvalidation') ?>

          <?php
          $firstname = array(
            'name'=> 'firstname',
            'id'=>'firstname',
            'size'=> '15',
            'value' => ''
          );
          $lastname = array(
            'name'=> 'lastname',
            'id'=>'lastname',
            'size'=> '15',
            'value' => ''
          );
          $email = array(
            'name'=> 'email',
            'id'=> 'email',
            'size'=> '15',
            'value' => ''
          );
          $phone = array(
            'name'=> 'phone',
            'id'=> 'phone',
            'size'=> '15',
            'value' => ''
          );
          // $arrivaldate = array(
          //   'name'=> 'arrivaldate',
          //   'id'=> 'arrivaldate',
          //   'size'=> '15',
          //   'value' => ''
          // );
          $nights = array(
            'name'=> 'nights',
            'id'=> 'nights',
            'size'=> '5',
            'value' => ''
          );
          // $comment = array(
          //   'name'=> 'comment',
          //   'id'=> 'comment',
          //   'rows'=>'2',
          //   'cols'=>'20',
          //   'value' => ''
          // );
          $whendate = array(
            'name'=> 'when',
            'id'=> 'when',
            'size'=> '15',
            'value' => ''
          );
          ?>


            <div class="formalign">
              <?php echo validation_errors(); ?>
              <p class="myresv">Contact Us</p>
              <p>Required information is marked with an asterisk (*)</p>
              <p>
                <label class="control-label col-sm-2 nopadding" for="firstname">* First Name:</label>
              <?php echo form_input($firstname);?>
              </p>
              <p>
                <label class="control-label col-sm-2 nopadding" for="lastname">* Last Name:</label>
                <!-- // <input type="text" name="lastname" id="lastname" size="15"> -->
                <?php echo form_input($lastname);?>

              </p>
              <p>
                <label class="control-label col-sm-2 nopadding" for="email">* E-mail:</label>
                <!-- // <input type="email" name="email" id="email" size="15"> -->
                <?php echo form_input($email);?>
              </p>
              <p>
                <label class="control-label col-sm-2 nopadding" for="phone">Phone:</label>
                <!-- // <input type="tel" name="phone" id="phone" size="15"> -->
                <?php echo form_input($phone);?>
              </p>
              <p>
                <label class="control-label col-sm-2 nopadding" for="arrivaldate">Arrival Date:</label>
                 <input type="date" name="arrivaldate" id="arrivaldate" size="15">
                <?php //echo form_input($arrivaldate);?>
              </p>
              <p>
                <label class="control-label col-sm-2 nopadding" for="nights">Nights:</label>
                <!-- // <input type="text" name="nights" id="nights" size="5"> -->
                <?php echo form_input($nights);?>
              </p>

              <p>
                <label class="control-label col-sm-2 nopadding" for="comment">* Comments:</label>
                <textarea name="comment" rows="2" cols="20" required></textarea>
                <?php// echo form_textarea($comment);?>
              </p>
              <p>
                <label class="control-label col-sm-2 nopadding" for="activities">* Activities:</label>
                <select name="activities" required>
                  <?php
                    foreach ($allactivities as $row) {
                  ?>
                      <option value="<?php echo $row->activityid;?>"><?php echo $row->activitydescription;?></option>
                      <?php } ?>
                </select>
              </p>
              <p>
                <label class="control-label col-sm-2 nopadding" for="package">* Packages:</label>
                <select name="package" required>
                  <?php
                  foreach ($allpackage as $row) {
                    // echo $row;
                ?>
                    <option value="<?php echo $row->packageid;?>"><?php echo $row->packagename;?></option>
                    <?php } ?>
                </select>
              </p>

              <p>
                <label class="control-label col-sm-2 nopadding" for="when">When:</label>
                <input type="date" name="when" id="when" size="15">
                <?php //echo form_input($whendate);?>
              </p>
              <p>
                <div class="row">
                  <div class="col-sm-2 nopadding"></div>
                  <input type="submit" name="submit">
                </div>
              </p>

            </div>
          <!-- </form> -->
          <?php echo form_close(); ?>
        </div>
