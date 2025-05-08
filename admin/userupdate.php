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
                    <a href="index1.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Update Registration</li>
            </ol>
            <!-- Area Chart Example -->
            <?php
            include('includes/connection.php');
            $id = $_GET['id'];
            $query = mysqli_query($conn, "select * from register where  id='$id'");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-user"></i>
                                <b>Edit Registration</b>
                            </div>
                            <div class="card-body">
                                <form action="updateuser-coding.php" method="post">
                                    <div class="form-group">
                                        <label for="id"><strong>Register Id</strong></label>
                                        <input type="text" name="id" class="form-control input-md" value="<?php echo $data['id'] ?>" placeholder="Register Id" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="fname"><strong>First Name</strong></label>
                                        <input type="text" name="fname" class="form-control input-md" value="<?php echo $data['f_name'] ?>" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="lname"><strong>Last Name</strong></label>
                                        <input type="text" name="lname" class="form-control input-md" value="<?php echo $data['l_name'] ?>" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><strong>Email Address</strong></label>
                                        <input type="email" name="email" class="form-control input-md" value="<?php echo $data['email'] ?>" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile"><strong>Mobile</strong></label>
                                        <input type="text" name="mobile" class="form-control input-md" value="<?php echo $data['mobile'] ?>" placeholder="Mobile">
                                    </div>
                                    <div class="form-group">
                                        <label for="uname"><strong>Username</strong></label>
                                        <input type="text" name="uname" class="form-control input-md" value="<?php echo $data['username'] ?>" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd"><strong>Password</strong></label>
                                        <input type="password" name="pwd" class="form-control input-md" value="<?php echo $data['password'] ?>" placeholder="Password">
                                    </div>
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            <?php
            }

            ?>
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