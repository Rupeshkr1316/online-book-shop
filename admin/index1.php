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

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

 <?php include('./navbar.php'); ?>

  <div class="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index1.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>

      <!-- Icon Cards -->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">
                Entry Pannel
              </div>
            </div>
            <a href="index1.php" class="card-footer text-white clearfix small z-1">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>

            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">
                User Registration
              </div>
            </div>
            <a href="user-registration.php" class="card-footer text-white clearfix small z-1">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">
                New Orders!
              </div>
            </div>
            <a href="order-details.php" class="card-footer text-white clearfix small z-1">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-book"></i>
              <b>Add Products</b>
            </div>
            <div class="card-body">
              <form action="entry_coding.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="State"><strong>Book Title</strong></label>
                  <input type="text" name="title" class="form-control input-md" placeholder="Book Title">
                </div>
                <div class="form-group">
                  <label for="pwd"><strong>Auther Name</strong></label>
                  <input type="text" name="auth_name" class="form-control input-md" placeholder="Auther Name">
                </div>
                <div class="form-group">
                  <label for="State"><strong>Publication</strong></label>
                  <input type="text" name="publication" class="form-control input-md" placeholder="Publication">
                </div>
                <div class="form-group">
                  <label for="pwd"><strong>Description</strong></label>
                  <input type="text" name="description" class="form-control input-md" placeholder="Description">
                </div>
                <div class="form-group">
                  <label for="pwd"><strong>Price</strong></label>
                  <input type="text" name="Price" class="form-control input-md" placeholder="Price">
                </div>
                <div class="form-group">
                  <label for="pwd"><strong>BOOK Image</strong></label>
                  <input type="file" name="image" class="form-control input-md">
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Area Chart Example -->
      <div class="row mt-3">
        <div class="col-12">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i>
              <b>View Book Details</b>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" cellspacing="0" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Book ID</th>
                      <th>Book Title</th>
                      <th>Auther Name</th>
                      <th>Publicaton</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Book Image</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $str = mysqli_query($conn, "select * from products ORDER BY id ASC");
                    while ($data = mysqli_fetch_array($str)) {
                      $id = $data['id'];
                    ?>
                      </tr>
                      <tr class="primary">
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['title']; ?></td>
                        <td><?php echo $data['auth_name']; ?></td>
                        <td><?php echo $data['publication']; ?></td>
                        <td><?php echo $data['description']; ?></td>
                        <td><?php echo $data['Price']; ?></td>
                        <td><img src="../images/<?php echo $data['image'] ?>" style="width:100px; height:80px;"></td>
                        <td><a href="update.php?id=<?php echo $id; ?>"><button class="btn btn-dark">Update</button></a>
                        </td>
                        <td><a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are You Sure To Delete ?')" ><button class="btn btn-danger">Delete</button></a></td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>


                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">
              Updated yesterday at 11:59 PM
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
      </div>s
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