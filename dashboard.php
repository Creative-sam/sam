<?php
  session_start();
  include("config.php");

 ?>


<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MSI-Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item dropdown d-none d-lg-flex">
            <a class="nav-link dropdown-toggle nav-btn" id="actionDropdown" href="#" data-toggle="dropdown">
              <span class="btn">+ Create new Chapter</span>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-left" aria-labelledby="actionDropdown">
              <a class="dropdown-item" href="#">
                <i class="icon-user text-primary"></i>
                User Account
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="icon-user-following text-warning"></i>
                Admin User
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="icon-docs text-success"></i>
                Sales report
              </a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="icon-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="icon-speech mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="icon-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="icon-envelope mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-lg-flex">

            <?php
            if (isset($_SESSION["regno"])) {
              echo '<p style="padding-top:7px;"> Welcome - '.$_SESSION["regno"].'</p>';
              echo '<a href="logout.php" class ="nav-link dropdown-toggle nav-btn" style="padding-left:5px;"><span class="btn" >LOGOUT</span></a>';
            }
            else {
              header("Location:login.php");
            }



             ?>

          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles primary"></div>
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles pink"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="nav-link">
                <div class="profile-image">
                  <img src="images/faces/face10.jpg" alt="image"/>
                  <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
                </div>
                <div class="profile-name">
                  <p class="name">
                    <?php echo $_SESSION["regno"]; ?>
                  </p>
                  <p class="designation">
                    <?php echo $_SESSION[""]; ?>
                  </p>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/profile.html">
                <i class="icon-rocket menu-icon"></i>
                <span class="menu-title">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
                <i class="icon-anchor menu-icon"></i>
                <span class="menu-title">New Chapter</span>
                <span class="badge badge-info">3</span>
              </a>
              <div class="collapse" id="editors">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code editors</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-features/popups.html">
                <i class="icon-diamond menu-icon"></i>
                <span class="menu-title">Popups</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <i class="icon-user menu-icon"></i>
                <span class="menu-title">General Pages</span>
                <span class="badge badge-warning">6</span>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/landing-page.html"> Landing Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/email.html">
                <i class="icon-cursor menu-icon"></i>
                <span class="menu-title">Approved chapters</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/email.html">
                <i class="icon-cursor menu-icon"></i>
                <span class="menu-title">Disapproved chapters</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-basket icon-lg text-success"></i>
                    <div class="ml-3">
                      <p class="mb-0">Chapters Sent</p>
                      <h6>12569</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-rocket icon-lg text-warning"></i>
                    <div class="ml-3">
                      <p class="mb-0">Chapters Approved</p>
                      <h6>2346</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-diamond icon-lg text-info"></i>
                    <div class="ml-3">
                      <p class="mb-0">Chapters Disapproved</p>
                      <h6>896546</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-chart-line-stacked icon-lg text-danger"></i>
                    <div class="ml-3">
                      <p class="mb-0">Chapters Pending Approval</p>
                      <h6>$ 56000</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
              <div class="card" style="box-shadow: 0px 1px 1px 0px grey;">
                <div class="card-body">
                  <h6 class="card-title text-center">STUDENT NAME</h6>
                  <div class="w-75 mx-auto">
                    <div style="height:250px; box-shadow: 1px 1px 1px grey;">
                      <img src="images/student.jpg" alt="">
                    </div>
                  </div>
                  <div class="w-75 mx-auto">
                    <div class="d-flex justify-content-between text-center mt-5">
                      <div class="wrapper">
                        <h4>13/SC/CO/254</h4>
                        <small class="text-muted">Registration Number</small>
                      </div>
                      <div class="wrapper">
                        <h4>09037220400</h4>
                        <small class="text-muted">Phone Number</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
              <div class="card" style="box-shadow: 1px 1px 1px grey;">
                <div class="card-body">
                  <h6 class="card-title text-center">SUPERVISOR NAME</h6>
                  <div class="w-75 mx-auto">
                    <div style="height:250px; box-shadow: 1px 1px 1px grey;">
                      <img src="images/supervisor.jpg" alt="">
                    </div>
                  </div>
                  <div class="w-75 mx-auto">
                    <div class="d-flex justify-content-between text-center mt-5">
                      <div class="wrapper">
                        <h4>13/SC/CO/254</h4>
                        <small class="text-muted">Registration Number</small>
                      </div>
                      <div class="wrapper">
                        <h4>09037220400</h4>
                        <small class="text-muted">Phone Number</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="#">Codekago</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/raphael/raphael.min.js"></script>
  <script src="node_modules/morris.js/morris.min.js"></script>
  <script src="node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/victory/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 10:00:39 GMT -->
</html>
