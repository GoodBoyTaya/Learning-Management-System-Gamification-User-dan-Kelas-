<!DOCTYPE html>
<?php
  session_start();
  if (!isset($_SESSION['session'])) {
    $_SESSION['session'] = false;
}
  include_once 'controller/UserController.php';
  include_once 'controller/MapelController.php';
  include_once 'controller/KelasController.php';
  include_once 'controller/SekolahController.php';
  include_once 'util/dbclass.php';
  include_once 'util/PDOUtil.php';
?>
<?php
  ob_start();
  
  $nav = filter_input(INPUT_GET, "navito");
  switch ($nav) {
    case 'keluar':
      $userController = new UserController();
      $userController->Logout();
      break;
    case 'otpverification':
      $userController = new UserController();
      $userController->forgetpass2();
      break;
    case 'changepassword':
      $userController = new UserController();
      $userController->forgetpass3();
      break;
    }
// Jika Sudah Login
if ($_SESSION['session']) {
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>uiCookies:Enlight &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
  <meta name="description" content="Free Bootstrap Theme by uicookies.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" href="css/styles-merged.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  <!-- [if lt IE 9]> -->
      <!-- <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script> -->
    <!-- <![endif] -->
</head>
<body>
<meta http-equiv="refresh" content="900;url=?navito=keluar" />
  <!-- <div class="probootstrap-search" id="probootstrap-search">
    <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
    <form action="#">
      <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
    </form>
  </div> -->
  <div class="probootstrap-page-wrapper">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <div class="btn-more js-btn-more visible-xs">
            <a href="#"><i class="icon-dots-three-vertical "></i></a>
          </div>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" title="uiCookies:Enlight">Enlight</a>
        </div>
        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <?php
              // buat admin
              ob_start();
              if ($_SESSION['status'] == 1){
                ?>
              <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?= $_SESSION['fullname'] ?></a>
              <ul class="dropdown-menu">
                <li><a href="?navito=adminprofile">Ubah Email</a></li>
                <li><a href="?navito=adminprofile">Ubah Password</a></li>
              </ul>
            </li>
            <li>
              <p style="margin-right:15px;margin-top:30px;"> <a href="?navito=keluar" class="btn btn-primary">Keluar</a> </p>
            </li>
            <?php 
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <main>
    </main>
  </div>
  <!-- END wrapper -->
</body>
</html>
<?php
}
//Jika Belum Login
else {
  $usercontroller = new UserController();
  $usercontroller->forgetpass1();
}
?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="css/styles-merged.css"> -->
  <!-- <link rel="stylesheet" href="css/style.min.css"> -->
  <!-- <link rel="stylesheet" href="css/custom.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css" /> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
  <!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> -->