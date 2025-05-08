<?php
include('includes/connection.php');
?>
<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin Online Book Shop</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style>
    @media print {
      .pd-none {
        display: none;
      }
    }
  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

  <?php include('./navbar.php'); ?>

  <div class="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs -->
      <ol class="breadcrumb pd-none">
        <li class="breadcrumb-item">
          <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">Bill Details</li>
      </ol>

      <!-- Area Chart Example -->
      <div class="row">
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-cart-plus"></i>
              <b>View Bill</b>
            </div>
            <div class="card-body">
              <?php
              $order_id = $_GET['id'];
              $orderQuery = "SELECT * FROM order_d WHERE id = '$order_id'";
              $orderResult = mysqli_query($conn,$orderQuery);
              $orderData = mysqli_fetch_assoc($orderResult);
              ?>
              <h4 class="mt-2 mb-3 text-center">ONLINE BOOK SHOP</h4>
              <div class="d-flex justify-content-between">
                <h5>Order Id :- <?php echo $order_id; ?></h5>
                <h5>Username :- <?php echo $orderData['userid']; ?></h5>
              </div>
              <h5 class="mt-3">Product Details</h5>
              <div class="table-responsive">
                <?php
                $itemsQuery = "SELECT * FROM order_items oi JOIN products pr WHERE oi.p_id = pr.id && order_id = '$order_id'";
                $itemsResult = mysqli_query($conn,$itemsQuery); ?>
                <table class="table table-bordered" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Product Id</th>
                      <th>Book Title</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($itemData = mysqli_fetch_assoc($itemsResult)) {
                    ?><tr>
                        <td><?php echo $itemData['p_id'] ?></td>
                        <td><?php echo $itemData['title'] ?></td>
                        <td><?php echo $itemData['Price'] ?></td>
                        <td><?php echo $itemData['quantity'] ?></td>
                        <td><?php echo ($itemData['Price'] * $itemData['quantity']) ?></td>
                      </tr><?php } ?>
                    <tr>
                      <td colspan="4" class="text-right font-weight-bold">Grand Total :- </td>
                      <td><?php echo $orderData['gtotal']; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="d-flex justify-content-end">
                <button onclick='window.print()' class='btn btn-primary pd-none'>Print</button>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- /.content-wrapper -->

      <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright &copy; ONLINE BOOK SHOP</small>
          </div>
        </div>
      </footer>

      <!-- Scroll to Top Button -->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>

      <!-- Logout Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Select "Logout" below if you are ready to end your current session.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
          </div>
        </div>
      </div>
      <!--end vmat details-->
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/popper/popper.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

      <!-- Plugin JavaScript -->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <script src="vendor/chart.js/Chart.min.js"></script>
      <script src="vendor/datatables/jquery.dataTables.js"></script>
      <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

      <!-- Custom scripts for this template -->
      <script src="js/sb-admin.min.js"></script>

</body>

</html>