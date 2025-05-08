<?php
include('head_meenu.php');
?>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "post") {
  if (empty($_POST["f_name"])) {
    $nameErr = "Name is required";
}
if (ctype_alpha($name) === false) {
  $nameErr[] = 'Name must contain letters and spaces only';
}
else {
  $name = test_input($_POST["f_name"]);
}

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  /*if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }*/
?>
<style>
  .img {
    margin-left: 20px;
    padding: 5px;
    height: 277px;
    width: 217px;
    margin-top: 10px;
  }
</style>
<!--welcome section-->
<div class="container-fluid">
  <div class="row" style="margin-bottom:50px;">
    <div class="container">
      <div id="content" class="col-sm-9">
        <h1>Register Account</h1>
        <p style="margin-left:100px;">If you already have an account with us, please login at the <a href="login.php">login page</a>.</p>
        <form action="register.php" method="post" enctype="multipart/form-data" class="form-horizontal">
          <fieldset id="account">
            <legend style="margin-left:100px;">Your Personal Details</legend>
            <div class="form-group required" style="display:  none ;">
              <label class="col-sm-3 control-label">Customer Group</label>
              <div class="col-sm-9">
                <div class="radio">
                  <label>
                    <input type="radio" name="customer_group_id" value="1" checked="checked">
                    Default</label>
                </div>
              </div>
            </div>
            <div class="form-group required">
              <label class="col-sm-3 control-label" for="input-firstname">First Name</label>
              <div class="col-sm-9">
                <Span><input type="text" name="f_name" value=""  pattern="[A-Za-z]+" title="Must contain in Alphabet series in uppercase and lowercase" placeholder="First Name" id="input-firstname" required class="form-control">
              </div>
            </div>
            <div class="form-group required">
              <label class="col-sm-3 control-label" for="input-lastname">Last Name</label>
              <div class="col-sm-9">
                <input type="text" name="l_name" value="" pattern="[A-Za-z]+" title="letters only" placeholder="Last Name" id="input-lastname" required class="form-control">
              </div>
            </div>
            <div class="form-group required">
              <label class="col-sm-3 control-label" for="input-email">E-Mail</label>
              <div class="col-sm-9">
                <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" required class="form-control">
              </div>
            </div>
            <div class="form-group required">
              <label class="col-sm-3 control-label" for="input-telephone">Telephone</label>
              <div class="col-sm-9">
                <input type="tel" name="mobile" value="" pattern="[0-9]{10}" title="10 numeric characters only" required placeholder="Telephone" id="input-telephone" class="form-control">
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend style="margin-left:100px;">Your Password</legend>
            <div class="form-group required">
              <label class="col-sm-3 control-label" for="input-password">Username</label>
              <div class="col-sm-9">
                <input type="text" name="username" value="" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}" title="Username must be between 8 and 20 characters"  placeholder="Username" id="input-password" required class="form-control">
              </div>
            </div>
            <div class="form-group required">
              <label class="col-sm-3 control-label" for="input-confirm">Password </label>
              <div class="col-sm-9">
                <input type="password" name="password" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" id="input-confirm" required class="form-control">
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend style="margin-left:100px;">Newsletter</legend>
            <div class="form-group">
              <label class="col-sm-3 control-label">Subscribe</label>
              <div class="col-sm-9"> <label class="radio-inline">
                  <input type="radio" name="newsletter" value="1">
                  Yes</label>
                <label class="radio-inline">
                  <input type="radio" name="newsletter" value="0" checked="checked">
                  No</label>
              </div>
            </div>
          </fieldset>

          <div class="buttons">
            <div class="pull-right">I have read and agree to the <a href="termandcondition.pdf"  required class="agree"><b>Terms &amp; Conditions</b></a>
              <input type="checkbox" name="agree" value="1" required>
              &nbsp;
              <input type="submit" value="submit" name="submit" class="btn btn-primary">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>

</div>
<!-- container -->

<?php
include('comman_footer.php');
?>