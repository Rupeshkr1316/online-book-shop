<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}
?>

<?php include('head_meenu.php'); ?>
<style>
  .contact-us-info1 ul {
    margin-top: 11px;
    border: 1px solid #bdbdbd;
  }

  li {
    display: list-item;
    text-align: -webkit-match-parent;
  }

  .contact-us-info1 ul li {
    list-style: none;
    margin-left: 20px;

  }

  ul {

    margin: 0;
    padding: 0;
  }

  ol,
  ul {
    margin-top: 0;
    margin-bottom: 10px;
  }
</style>
<div id="wrapper">
  <!-- Header Area Start Here -->
  <!-- Header Area End Here -->
  <!-- Inner Page Banner Area Start Here -->
  <div class="inner-page-banner-area" style="background:url(slider/contact.jpg); padding-bottom:50px;">
    <div class="container">
      <div class="pagination-area">
        <h1>Contact Us</h1>
        <p style="font-size:18px; color:#FFF;"><span><a href="index.php">Home</a></span>&nbsp;&nbsp;&nbsp;<span><a href="index.php">Contact</a></span>
          </ul>
      </div>
    </div>
  </div>
  <!-- Inner Page Banner Area End Here -->
  <!-- Contact Us Page 1 Area Start Here -->
  <div class="contact-us-page1-area" style="border:1px solid #CCCCCC">
    <div class="container">
      <div class="row">

        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

          <?php
          include('includes/connection.php');
          $id = $_GET['id'];
          $query = mysqli_query($conn,"select * from products where  id='$id'");
          while ($data = mysqli_fetch_array($query)) {
          ?>
            <div class="row">
              <div class="col-lg-12">
                <!-- Example Social Card -->
                <h4><strong>Product Details</strong></h4>
                <form action="order-coding.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="State"><strong>Book Title</strong></label>
                    <input type="text" name="title" class="form-control input-md" value="<?php echo $data['title'] ?>" placeholder="Book Title">
                  </div>
                  <div class="form-group">
                    <label for="pwd"><strong>Auther Name</strong></label>
                    <input type="text" name="name" class="form-control input-md" value="<?php echo $data['auth_name'] ?>" placeholder="Auther Name">
                  </div>
                  <div class="form-group">
                    <label for="pwd"><strong>Price</strong></label>
                    <input type="text" name="price" class="form-control input-md" value="<?php echo $data['Price'] ?>" placeholder="Price">
                  </div>
                  <div class="form-group">
                    <label for="pwd"><strong>Customer Name</strong></label>
                    <input type="text" name="c_name" class="form-control input-md" value="<?php echo $_SESSION['username']; ?>" placeholder="Customer Name" required>
                  </div>
                  <div class="form-group">
                    <label for="pwd"><strong>Adresss</strong></label>
                    <input type="text" name="address" class="form-control input-md" value="" placeholder="Full address" required>
                  </div>

                  <div class="form-group">
                    <label for="pwd"><strong>Mobile No</strong></label>
                    <input type="text" name="mobile" value="" placeholder="Mobile No" class="form-control input-md" required>
                  </div>
                  <button type="submit" name="submit" value="submit" class="btn btn-primary col-lg-6">ORDER NOW</button>
                </form><br><br><br>

              </div>
              <!-- /.container-fluid -->

            </div>
          <?php
          }

          ?>
        </div>
      </div>
    </div>
    <br><br><br>
  </div>
  <!-- Contact Us Page 1 Area End Here -->
  <!-- Footer Area Start Here -->
  <?php include('comman_footer.php'); ?>
  <!-- Footer Area End Here -->