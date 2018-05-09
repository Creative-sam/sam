<?php
session_start();
  try {

    $conn = new PDO ('mysql:host=localhost;dbname=msi', 'root', '');
    $message = "";

    if (isset($_POST["done"])) {
      if (empty($_POST["regno"]) || empty($_POST["password"])) {
          $message = '<label>All fields are required</label>';
      }
      else {
        $query = "SELECT * FROM students WHERE regno = :regno AND password = :password";
        $statement = $conn->prepare($query);
        $statement->execute(
          array(
            'regno' => $_POST["regno"],
            'password' => $_POST["password"]
          )
        );
        $count = $statement->rowCount();
        if ($count > 0) {
          $_SESSION["regno"] = $_POST["regno"];
          header("location:dashboard.php");
        }
        else {
          $message = '<label>Wrong Data</label>';
        }
      }
    }

  } catch (PDOException $error) {
    echo "error".getMessage();
  }


 ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/victory/pages/samples/lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 10:12:25 GMT -->
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
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth lock-full-bg">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-transparent text-left p-5 text-center">
                <img src="images/faces/face13.jpg" alt="profile" class="lock-profile-img">
                <form class="pt-5" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="regno" placeholder="Registration Number">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control text-center" name="password" placeholder="Password">
                  </div>
                  <div class="mt-5">
                    <input class="btn btn-block btn-primary btn-lg font-weight-medium" type="submit" name="done" value="LOGIN">
                  </div>
                  <?php
                    if (isset($message)) {
                      echo '<label class="text-danger" style="padding:30px; background:#fff;">'.$message.'</label>';
                    }

                   ?>
                  <div class="mt-3 text-center">
                    <a href="index.php" class="auth-link text-white">Don't have an account? Register here</a>
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


<!-- Mirrored from www.urbanui.com/victory/pages/samples/lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 10:12:26 GMT -->
</html>
