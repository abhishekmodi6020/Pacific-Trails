<div class="col-lg-10 col-sm-10 col-xs-10 nopadding">
  <div class="pad20px">
    <header>
      <h2>Reservations at Pacific Trails</h2>
    </header>
<?php echo form_open('PacificController/myreservationvalidation') ?>

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
$nights = array(
  'name'=> 'nights',
  'id'=> 'nights',
  'size'=> '5',
  'value' => ''
);

$whendate = array(
  'name'=> 'when',
  'id'=> 'when',
  'size'=> '15',
  'value' => ''
);
$fname = '';
$lname = '';
$phone = '';
$arrivaldate = '';
$departuredate = '';
$date = '';
// $resdata->fname = '';
// $resdata->lname = '';
// $resdata->phone = '';
// $resdata->arrivaldate = '';
// $resdata->departuredate = '';

?>


  <div class="formalign">
    <?php echo validation_errors(); ?>
    <p class="myresv">My Reservation</p>

    <p>
      <label class="control-label col-sm-2 nopadding" for="email">* E-mail:</label>

      <?php if (isset($resdata)): ?>
        <input type="email" name="email" id="email" size="15" value="<?php foreach ($resdata as $res) {
            echo $res->email;
        } ?>">
      <?php else: echo form_input($email);?>
      <?php endif; ?>
    </p>
    <p>
      <label class="control-label col-sm-2 nopadding" for="firstname">First Name:</label>
      <?php if (isset($resdata)): ?>
        <input type="text" name="firstname" id="firstname" size="15" value="<?php foreach ($resdata as $res) {
          echo $res->fname;
        } ?>">
          <?php else: echo form_input($fname);?>
      <?php endif; ?>


    </p>
    <p>
      <label class="control-label col-sm-2 nopadding" for="lastname">Last Name:</label>

      <?php if (isset($resdata)): ?>
        <input type="text" name="lastname" id="lastname" size="15" value="<?php foreach ($resdata as $res) {
          echo $res->lname;
        } ?>">
          <?php else: echo form_input($fname);?>
      <?php endif; ?>
    </p>

    <p>
      <label class="control-label col-sm-2 nopadding" for="phone">Phone:</label>
      <?php if (isset($resdata)): ?>
        <input type="tel" name="phone" id="phone" size="15" value="<?php foreach ($resdata as $res) {
          echo $res->phone;
        } ?>">
          <?php else: echo form_input($fname);?>
      <?php endif; ?>
    </p>
    <p>
      <label class="control-label col-sm-2 nopadding" for="arrivaldate">Arrival Date:</label>

       <?php if (isset($resdata)): ?>
           <input type="date" name="arrivaldate" id="arrivaldate" size="15" value="<?php foreach ($resdata as $res) {
             echo $res->arrivaldate;
           } ?>">
         <?php  else: ?><input type="date" name="arrivaldate" id="arrivaldate" size="15" value="">
       <?php endif; ?>
    </p>
    <p>
      <label class="control-label col-sm-2 nopadding" for="departuredate">Departure Date:</label>
       <?php if (isset($resdata)): ?>
           <input type="date" name="departuredate" id="departuredate" size="15" value="<?php foreach ($resdata as $res) {
             echo $res->date;
           } ?>">
         <?php  else: ?><input type="date" name="departuredate" id="departuredate" size="15" value="">
       <?php endif; ?>
    </p>
    <p>
      <label class="control-label col-sm-2 nopadding" for="activities">* Activities:</label>
      <select name="activities" disabled>
            <option>
              <?php if (isset($resdata)): ?>
                <?php foreach ($resdata as $res) {
                  echo $res->activitydescription;
                } ?>
               <?php else: echo form_dropdown($fname);?>
              <?php endif; ?>
            </option>
      </select>
    </p>
    <p>
      <label class="control-label col-sm-2 nopadding" for="package">* Packages:</label>
      <select name="package" disabled>
          <option>
            <?php if (isset($resdata)): ?>
              <?php foreach ($resdata as $res) {
                echo $res->packageName;
              } ?>
             <?php else: echo form_dropdown($fname);?>
            <?php endif; ?>
          </option>
      </select>
    </p>

    <p>
      <label class="control-label col-sm-2 nopadding" for="when">When:</label>
      <?php if (isset($resdata)): ?>
          <input type="date" name="when" id="when" size="15" value="<?php foreach ($resdata as $res) {
            echo $res->date;
          } ?>">
        <?php  else: ?><input type="date" name="when" id="when" size="15" value="">
      <?php endif; ?>
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
