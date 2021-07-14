<!DOCTYPE html>
<?php
  session_start();
  if (!isset($_SESSION['session'])) {
    $_SESSION['session'] = false;
}
  include_once 'controller/UserController.php';
  include_once 'controller/BankSoalController.php';
  include_once 'controller/MapelController.php';
  include_once 'controller/KelasController.php';
  include_once 'util/dbclass.php';
  include_once 'util/PDOUtil.php';
?>
<?php
ob_start();
// Jika Sudah Login
if ($_SESSION['session']) {
  if ($_SESSION['verifemail'] == 0) {
    $userController = new UserController();
    $userController->otpverification();
    switch ($nav) {
      case 'keluar':
        $userController = new UserController();
        $userController->Logout();
        break;
    }
  }
  else {
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
                ob_start();
              // buat admin
              if ($_SESSION['role'] == 1){
                ?>
              <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?= $_SESSION['fullname'] ?></a>
              <ul class="dropdown-menu">
                <li><a href="?navito=adminprofile">Profile</a></li>
              </ul>
            </li>
            <li>
              <p style="margin-right:15px;margin-top:30px;"> <a href="?navito=keluar" class="btn btn-primary">Keluar</a> </p>
            </li>
            <?php 
            }
            // Buat Guru
              elseif ($_SESSION['role'] == 2) {?>
            <li class="active"><a href="?navito=beranda">Beranda</a></li>
            <li><a href="?navito=kelas">Materi</a></li>
            <li><a href="?navito=guru">Guru</a></li>
            <li><a href="?navito=ujian">Ujian</a></li>
            <li><a href="?navito=ujian_guru">Ujian Guru</a></li>
            <li><a href="?navito=bank_soal">Bank Soal</a></li>
            <li><a href="?navito=leaderboard">Leaderboard</a></li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pengguna</a>
              <ul class="dropdown-menu">
                <li><a href="about.html">Profile</a></li>
                <li><a href="courses.html">Nilai</a></li>
                <li><a href="?navito=penghargaan">Penghargaan</a></li>
                <li><a href="?navito=setting_badge_pelajaran">Setting Badge Pelajaran</a></li>
                <li><a href="?navito=setting_badge_tugas">Setting Badge Tugas</a></li>
                <li><a href="?navito=setting_badge_lainnya">Setting Badge Lainnya</a></li>
                <li class="dropdown-submenu dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                  </ul>
                </li>
                <li><a href="news.html">News</a></li>
              </ul>
            </li>
            <li>
              <p style="margin-right:15px;margin-top:30px;"> <a href="#" class="btn btn-primary">Keluar</a> </p>
            </li>
            <?php
              }
            // Buat Siswa
              elseif ($_SESSION['role'] == 3) {
            ?>
            <li class="active"><a href="?navito=beranda">Beranda</a></li>
            <li><a href="?navito=kelas">Materi</a></li>
            <li><a href="?navito=guru">Guru</a></li>
            <li><a href="?navito=ujian">Ujian</a></li>
            <li><a href="?navito=leaderboard">Leaderboard</a></li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php echo($_SESSION['fullname']) ?></a>
              <ul class="dropdown-menu">
                <li><a href="courses.html">Nilai</a></li>
                <li><a href="?navito=penghargaan">Penghargaan</a></li>
                <li><a href="?navito=setting_badge_pelajaran">Setting Badge Pelajaran</a></li>
                <li><a href="?navito=setting_badge_tugas">Setting Badge Tugas</a></li>
                <li><a href="?navito=setting_badge_lainnya">Setting Badge Lainnya</a></li>
                <li class="dropdown-submenu dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                  </ul>
                </li>
                <li><a href="news.html">News</a></li>
              </ul>
            </li>
            <li>
              <p style="margin-right:15px;margin-top:30px;"> <a href="?navito=keluar" class="btn btn-primary">Keluar</a> </p>
            </li>
            <?php
              }
            // Buat SuperAdmin
              elseif ($_SESSION['role'] == 4) {
            ?>
            <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <?php
      $nav = filter_input(INPUT_GET, "navito");
      switch ($nav) {
        case 'beranda':
          include_once './views/beranda/beranda.php';
          break;
        case 'about':
          include_once './views/about.php';
          break;
          // kelas (siswa)
        case 'kelas':
          include_once './views/kelas/kelas.php';
          break;
        case 'kelasdetail':
          include_once './views/kelas/kelas_detail.php';
          break;
        case 'kelasdetailbab':
          include_once './views/kelas/kelas_detail_bab.php';
          break;
          // kelas (guru)
        case 'guru_kelas':
          include_once './views/guru/guru_kelas.php';
          break;
        case 'tambah_materi':
          include_once './views/guru/tambah_materi.php';
          break;
        case 'guru_kelas_detail':
          include_once './views/guru/guru_kelas_detail.php';
          break;
          // guru
        case 'guru':
          include_once './views/guru/guru.php';
          break;
          // ujian
        case 'ujian':
          include_once './views/ujian/ujian.php';
          break;
        case 'ambil_ujian':
          include_once './views/ujian/ambil_ujian.php';
          break;
          // banksoal
        case 'bank_soal':
          include_once './views/bank_soal/bank_soal.php';
          break;
        case 'bank_soal1':
          include_once './views/bank_soal/bank_soal1.php';
          break;
        case 'bank_soal2':
          include_once './views/bank_soal/bank_soal2.php';
          break;
        case 'tambah_soal':
          $bankSoalController = new BankSoalController();
          $bankSoalController->add();
          // include_once './views/bank_soal/tambah_soal.php';
          break;
        case 'pilih_soal':
          include_once './views/bank_soal/pilih_soal.php';
          break;
        case 'soal_single_choice':
          include_once './views/bank_soal/soal_single_choice.php';
          break;
        case 'soal_multiple_choice':
          include_once './views/bank_soal/soal_multiple_choice.php';
          break;
        case 'soal_true_false':
          include_once './views/bank_soal/soal_true_false.php';
          break;
        case 'soal_isian':
          include_once './views/bank_soal/soal_isian.php';
          break;
        case 'soal_essai':
          include_once './views/bank_soal/soal_essai.php';
          break;
          // menu guru
        case 'buat_ujian':
          include_once './views/menu_guru/buat_ujian.php';
          break;
        case 'buat_tugas':
          include_once './views/menu_guru/buat_tugas.php';
          break;
        case 'tugas_guru_detail':
          include_once './views/menu_guru/tugas_guru_detail.php';
          break;
        case 'ujian_guru_detail':
          include_once './views/menu_guru/ujian_guru_detail.php';
          break;
        case 'ujian_guru':
          include_once './views/menu_guru/ujian_guru.php';
          break;
        case 'beri_badge':
          include_once './views/menu_guru/beri_badge.php';
          break;
          //profile
        case 'student_profile':
          include_once './views/profile/student_profile.php';
          break;
        case 'admin_profile':
          include_once './views/profile/admin_profile.php';
          break;
        case 'teacher_profile':
          include_once './views/profile/teacher_profile.php';
          break;
          //penghargaan
        case 'penghargaan':
          include_once './views/penghargaan/penghargaan.php';
          break;
          case 'setting_badge_pelajaran':
            include_once './views/penghargaan/setting_badge_pelajaran.php';
            break;
          case 'setting_badge_tugas':
            include_once './views/penghargaan/setting_badge_tugas.php';
            break;
          case 'setting_badge_lainnya':
            include_once './views/penghargaan/setting_badge_lainnya.php';
            break;
          //leaderboard;
        case 'leaderboard':
          include_once './views/penghargaan/leaderboard.php';
          break;
          //admin
        case 'adminlanding':
          include_once './views/admin/adminlanding.php';
          break;
        case 'adminprofile':
          $usercontroller = new UserController();
          $usercontroller->adminProfile();
          break;
        case 'adminprofileedit':
          $usercontroller = new UserController();
          $usercontroller->editprofileAdmin();
          break;
        case 'admin_studentdata':
          $usercontroller = new UserController();
          $usercontroller->DaftarMurid();
          // include_once './views/admin/admin_studentdata.php';
          break;
        case 'admin_studentadd':
          $usercontroller = new UserController();
          $usercontroller->addsiswa();
          // include_once './views/admin/admin_studentadd.php';
          break;
        case 'admin_studentedit':
          $usercontroller = new UserController();
          $usercontroller->updatesiswa();
          break;
        case 'admin_studentdelete':
          $usercontroller = new UserController();
          $usercontroller->DeleteSiswa();
          break;
        case 'admin_teacherdata':
          $usercontroller = new UserController();
          $usercontroller->DaftarGuru();
          // include_once './views/admin/admin_teacherdata.php';
          break;
        case 'admin_teacheradd':
          $usercontroller = new UserController();
          $usercontroller->addguru();
          // include_once './views/admin/admin_teacheradd.php';
          break;
        case 'admin_teacheredit':
          $usercontroller = new UserController();
          $usercontroller->updateguru();
          break;
        case 'admin_teacherdelete':
          $usercontroller = new UserController();
          $usercontroller->DeleteGuru();
          break;
        case 'admin_courseadd':
          $mapelcontroller = new MapelController();
          $mapelcontroller->setmapel();
          break;
        case 'admin_courseedit':
          $mapelcontroller = new MapelController();
          $mapelcontroller->updatemapel();
          break;
        case 'admin_classadd':
          $kelascontroller = new KelasController();
          $kelascontroller -> addkelas();
          break;
        case 'admin_classedit':
          $kelascontroller = new KelasController();
          $kelascontroller -> editkelas();
          break;
        case 'admin_assignadd':
          $kelascontroller = new KelasController();
          $kelascontroller -> addMapelKelas();
          break;
        case 'admin_scheduleadd':
          $kelascontroller = new KelasController();
          $kelascontroller -> addJadwal();
          break;
        case 'admin_scheduleedit':
          $kelascontroller = new KelasController();
          $kelascontroller -> editJadwal();
          break;
        case 'admin_selectedassigndelete':
          $kelascontroller = new KelasController();
          $kelascontroller -> DeleteSelectedRow();
          break;
        case 'admin_classmemberdata':
          $kelascontroller = new KelasController();
          $kelascontroller -> GetAnggota();
          break;
        case 'admin_classmemberadd':
          $kelascontroller = new KelasController();
          $kelascontroller -> addAnggota();
          break;
        case 'admin_classmemberdelete':
          $kelascontroller = new KelasController();
          $kelascontroller -> delAnggota();
          break;
          //lupa pass
        // case 'lupa_password':
        //   $usercontroller = new UserController();
        //   $usercontroller->forgetpass1();
        //   break;
          // guru
        case 'berita_detail':
          include_once './views/berita/berita_detail.php';
          break;
          //SUPER ADMIN
        case 'superadmin_admindata':
          include_once './views/superadmin/superadmin_admindata.php';
          break;
        case 'superadmin_adminadd':
          include_once './views/superadmin/superadmin_adminadd.php';
          break;
        case 'superadmin_schooldata':
          include_once './views/superadmin/superadmin_schooldata.php';
          break;
        case 'superadmin_schooladd':
          include_once './views/superadmin/superadmin_schooladd.php';
          break;
        case 'keluar':
          $userController = new UserController();
          $userController->Logout();
          break;
        default:
          if ($_SESSION['session']) {
            if ($_SESSION['role'] == 1) {
              include_once './views/admin/adminlanding.php';
            }
            else{
              include_once './views/beranda/beranda.php';
            }
          }
          break;
      }
      ?>
    </main>
    <footer class="probootstrap-footer probootstrap-bg no-margin p-t-40">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="probootstrap-footer-widget">
              <img src="img\logo.png" alt="">
            </div>
          </div>
          <div class="col-md-4 col-md-push-4">
            <div class="probootstrap-footer-widget text-right">
              <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              <span>Copyright Enlight 2021</span>
            </div>
          </div>
        </div>
        <!-- END row -->
      </div>
    </footer>
  </div>
  <!-- END wrapper -->
</body>
</html>
<?php
  }
}
//Jika Belum Login
else {
  $usercontroller = new UserController();
  $usercontroller->Login();
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