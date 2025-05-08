<?php
include('head_meenu.php');
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
        <h1>Login Account</h1>
        <form action="chklogin.php" method="post" enctype="multipart/form-data" class="form-horizontal">
          <fieldset>
            <legend style="margin-left:100px;">User Login</legend>
            <div class="form-group required">
              <label class="col-sm-3 control-label" for="input-password">Username</label>
              <div class="col-sm-9">
                <input type="text" name="username" value="" placeholder="Username" id="input-password" required class="form-control">
              </div>
            </div>
            <div class="form-group required">
              <label class="col-sm-3 control-label" for="input-confirm" >Password </label>
              <div class="col-sm-9">
                <input type="password" name="password" value="" placeholder="Password" id="input-confirm" required class="form-control">
              </div>
            </div>
          </fieldset>


          <div class="buttons">
            <div class="pull-right">Not a member yet? <a href="login-register.php" class="agree"><b>Register</b></a>

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