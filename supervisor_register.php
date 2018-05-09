<?php
  try {
    $conn = new PDO ("mysql:host=localhost; dbname=msi", "root", "" );

    if (isset($_POST['done'])) {
      $fullname = $_POST['fullname'];
      $regno = $_POST['regno'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $password = $_POST['password'];

      $insert = $conn->prepare("INSERT INTO supervisors (`fullname`, `regno`, `email`, `phone`, `password`) VALUES (:fullname, :regno, :email, :phone, :password)");

      $insert->bindParam(':fullname', $fullname);
      $insert->bindParam(':regno', $regno);
      $insert->bindParam(':email', $email);
      $insert->bindParam(':phone', $phone);
      $insert->bindParam(':password', $password);

      $insert->execute();
  }
}catch(PDOException $e) {
    echo "error".getMessage();
  }

 ?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/victory/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 10:12:25 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Victory Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth register-full-bg">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <h3> Supervisors Registration section</h3>
                <h4 class="font-weight-light">Hello! let's get started</h4>
                <form method="post" class="pt-4">
                  <div class="form-group">
                    <input type="text" name="fullname" class="form-control" placeholder="Full Name">
                    <i class="mdi mdi-account"></i>
                  </div>
                  <div class="form-group">
                    <input type="text" name="regno" class="form-control"  placeholder="Registration Number">
                    <i class="mdi mdi-eye"></i>
                  </div>
                  <div class="form-group">
                    <input type="text" name="email" class="form-control"  placeholder="Email">
                    <i class="mdi mdi-eye"></i>
                  </div>
                  <div class="form-group">
                    <input type="text" name="phone" class="form-control"  placeholder="Phone Number">
                    <i class="mdi mdi-eye"></i>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control"  placeholder="Password">
                    <i class="mdi mdi-eye"></i>
                  </div>
                  <div class="mt-5">
                    <input class="btn btn-block btn-primary btn-lg font-weight-medium" type="submit" name="done" value="Register">
                  </div>
                  <div class="mt-2 text-center">
                    <a href="login.php" class="auth-link text-black">Already have an account? <span class="font-weight-medium">Sign in</span></a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/misc.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/victory/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 10:12:25 GMT -->
</html>
