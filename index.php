<?php
session_start();
include('head_meenu.php');
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}
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

<!-- start slider -->
<div class="slider">
  <div id="about-slider">
    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active"> <img src="slider/1.jpg" class="img-responsive" alt=""> </div>
        <div class="item"> <img src="slider/2.jpg" class="img-responsive" alt=""> </div>
      </div>
      <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next"> <i class="fa fa-angle-right"></i> </a>
    </div>
    <!--/#carousel-slider-->
  </div>
</div>
<!--end slider-->
<!--welcome section-->
<div class="container-fluid">
  <div class="row" style="margin-bottom:50px;">
    <div class="container">
      <h2 class="text-center">Book Collections</h2>

      <?php
      include('includes/connection.php');
      $str = mysqli_query($conn, "select * from products ORDER BY id ASC");
      while ($data = mysqli_fetch_array($str)) {
        $id = $data['id'];
        $image = $data['image'];
        $title = $data['title'];
      ?>
        <div class="col-sm-3" style="margin-top:20px;">
          <div class="panel-group">
            <div class="panel panel-primary">
              <img src="images/<?php echo $data['image']; ?>" class="img-responsive img-thumbnail img">
              <p class="text-center"><br> <span><strong>Book Name:<?php echo $data['title']; ?> </strong></span>&nbsp;&nbsp;&nbsp;&nbsp;<br><span><strong>Book Price</strong>: <?php echo $data['Price']; ?>/-</span></p>
              <?php
              echo "<form action='cart.php' method='post'>";
              echo "<input type='hidden' name='product_id' value='" . $id . "' />";
              echo "<input type='hidden' name='quantity' value='1' min='1' />";
              echo "<input class='btn btn-default' style='margin-left:75px; margin-bottom:20px;' type='submit' name='add_to_cart' value='Add to Cart' />";
              echo "</form>"; ?>
            </div>
          </div>

        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>

</div>
<!-- container -->
<?php
include('comman_footer.php');
?>