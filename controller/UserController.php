<?php
include_once 'dao/UserDaoImpl.php';
include_once 'dao/MapelGuruDaoImpl.php';
include_once 'dao/MapelDaoImpl.php';
include_once 'dao/SekolahDaoImpl.php';
include_once 'model/Sekolah.php';
include_once 'model/User.php';
include_once 'model/MapelGuru.php';

class UserController
{
    private $userdao;
    private $mapelgurudao;
    private $mapeldao;
    private $sekolahdao;

    public function __construct()
    {
        $this->userdao = new UserDaoImpl();
        $this->mapelgurudao = new MapelGuruDaoImpl();
        $this->mapeldao = new MapelDaoImpl();
        $this->sekolahdao = new SekolahDaoimpl();
    }

    public function DaftarMurid()
    {
        $listmurid = $this->userdao->getUserData('',$_SESSION['id_sekolah'],'3');
        include_once './views/admin/admin_studentdata.php';
    }

    public function adminProfile()
    {
        $adminprofile = $this->userdao->getUserData($_SESSION['id'],'','1');
        include_once './views/admin/adminprofile.php';
    }

    public function DaftarAdmin()
    {
        $listadmin = $this->userdao->getUserData('','','1');
        include_once './views/superadmin/superadmin_admindata.php';
    }

    public function addAdmin()
    {
        // error_reporting(0);
        $getsekolah = $this->sekolahdao->getSekolahData('');
        $submitPressed = $_POST["btnSubmit"];
        if ($submitPressed) {

            $name = $_POST["fullname"];
            $induk = $_POST["induk"];
            $sekolah = $_POST["sekolahpilih"];
            $email = $_POST["email"];
            

            $user = new User();
            $user->setUser_id('');
            $user->setUser_Fullname($name);
            $user->setUser_nomor_induk($induk);
            $user->setUser_sekolah($sekolah);
            $user->setUser_mobilephone('-');
            $user->setUser_address('-');
            $user->setUser_role('1');
            $user->setUser_email($email);
            $uploadpic = 'uploads/pic_user/';
            if (isset($_FILES['profilepic']['name'])) {
                $user->setUser_profilepic(pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION));
            }

            
            $result = $this->userdao->addsiswa($user);
            $insertedQ = $result[0];

            if (!$insertedQ['ErrCode']) {
                $this->uploadFile('profilepic', $uploadpic, $result[0]['id']);
                echo $result[0]['ErrMsg'];
            }
        }
        if ($result) {
            $this->DaftarAdmin();
        }
        else {
            include_once 'views\superadmin\superadmin_adminadd.php';
        }
    }

    public function editprofileAdmin()
    {
        error_reporting(0);
        $dataadmin = $this->userdao->getUserData('id','','1');
        $submitPressed = $_POST["btnSubmit"];
        if ($submitPressed) {

            $name = $_POST["fullname"];
            $induk = $_POST["induk"];
            $handphone = $_POST["handphone"];
            $address = $_POST["address"];
            $email = $_POST["email"];
            $id = $_GET['id'];

            $user = new User();
            $user->setUser_id($id);
            $user->setUser_Fullname($name);
            $user->setUser_nomor_induk($induk);
            $user->setUser_sekolah($_SESSION['id_sekolah']);
            $user->setUser_mobilephone($handphone);
            $user->setUser_address($address);
            $user->setUser_role('1');
            $user->setUser_email($email);
            $uploadpic = 'uploads/pic_user/';
            if (isset($_FILES['profilepic']['name'])) {
                $user->setUser_profilepic(pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION));
            }

            $result = $this->userdao->addsiswa($user);
            $insertedQ = $result[0];

            if (!$insertedQ['ErrCode']) {
                $this->uploadFile('profilepic', $uploadpic, $result[0]['id']);
                echo $result[0]['ErrMsg'];
            }
        }
        $id = $_GET['id'];
        if(isset($id)){
            $updatesiswa = $this->userdao->getUserData($id,'','1');
            $updatesiswa = $updatesiswa[0];
        }
        include_once 'views\admin\admin_profileedit.php';
    }

    public function editAdmin()
    {
        error_reporting(0);
        $dataadmin = $this->userdao->getUserData('id','','1');
        $submitPressed = $_POST["btnSubmit"];
        if ($submitPressed) {

            $name = $_POST["fullname"];
            $induk = $_POST["induk"];
            $handphone = $_POST["handphone"];
            $address = $_POST["address"];
            $email = $_POST["email"];
            $id = $_GET['id'];

            $user = new User();
            $user->setUser_id($id);
            $user->setUser_Fullname($name);
            $user->setUser_nomor_induk($induk);
            $user->setUser_sekolah('');
            $user->setUser_mobilephone($handphone);
            $user->setUser_address($address);
            $user->setUser_role('1');
            $user->setUser_email($email);
            $uploadpic = 'uploads/pic_user/';
            if (isset($_FILES['profilepic']['name'])) {
                $user->setUser_profilepic(pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION));
            }

            $result = $this->userdao->addsiswa($user);
            $insertedQ = $result[0];

            if (!$insertedQ['ErrCode']) {
                $this->uploadFile('profilepic', $uploadpic, $result[0]['id']);
                echo $result[0]['ErrMsg'];
            }
        }
        $id = $_GET['id'];
        if(isset($id)){
            $updateadmin = $this->userdao->getUserData($id,'','1');
            $updateadmin = $updateadmin[0];
        }
        include_once 'views\superadmin\superadmin_adminedit.php';
    }

    public function DeleteAdmin()
    {
        error_reporting(0);

        $id = $_GET['id'];

        $user = new User();
        $user->setUser_id($id);
        $uploadpic = 'uploads/pic_user/'.$id.'.jpg';

        
        $result = $this->userdao->deladmin($user);
        $delete = $result[0];
        
        if ($delete['ErrCode']) {
            // var_dump($uploadpic);
            unlink($uploadpic);
            echo $delete['ErrMsg'];

            $this->DaftarAdmin();
        }
        
    }

    public function DaftarGuru()
    {
        $listguru = $this->userdao->getUserData('',$_SESSION['id_sekolah'],'2');
        include_once './views/admin/admin_teacherdata.php';
    }

    public function ListMapelGuru()
    {
        $id = $_GET['id'];
        $listmapel = $this->mapelgurudao->getMapelGuru($id);
    }

    public function login(){
        $submitPressed = filter_input(INPUT_POST,"btnLogin");
        if ($submitPressed) {
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $pass = md5($pass);

            $user = new User();
            $user->setUser_email($email);
            $user->setUser_password($pass);

            // var_dump($user);
            $result = $this->userdao->Login($user);
            if(isset($result[0]['ErrCode'])){
                echo($result[0]['ErrMsg']);
            }
            else{
                $_SESSION['session'] = true;

                $_SESSION['id'] = $result[0]['id'];
                $_SESSION['role'] = $result[0]['rol'];
                $_SESSION['id_sekolah'] = $result[0]['id_sekolah'];
                $_SESSION['fullname'] = $result[0]['fullname'];
                $_SESSION['profilepic'] = $result[0]['profilepic'];
                $_SESSION['verifemail'] = $result[0]['verifemail'];
                $_SESSION['schoolname'] = $result[0]['schoolname'];
                $_SESSION['jenjang'] = $result[0]['jenjang'];
                $_SESSION['logo'] = $result[0]['logo'];

                header("location:index.php");
            }

        }
        include_once 'views/others/login.php';
    }

    public function otpverification()
    {
        $otpgen = rand(100000,999999);

        $user = new User();
        $user->setUser_email($_SESSION['email']);

        $result = $this->userdao->setOTP($user,$otpgen);

        if (!$result[0]['ErrCode']) {
            ini_set('display_errors',1);
            error_reporting(E_ALL);
        
            $from= "learning@learning.it.maranatha.edu";
            $to = $_SESSION['email'];
        
            $subject = "Kiriman Kode OTP";
            $message =  $otpgen." adalah Kode OTP untuk verifikasi email";
            $headers = "Dari:" . $from;
        
            mail($to,$subject,$message,$headers);
        }
        else {
            echo($result[0]['ErrMsg']);
        }
        $submitPressed = filter_input(INPUT_POST,"verif");
        if ($submitPressed) {
            $otp = $_POST['otp'];

            $result2 = $this->userdao->LoginOTP($_SESSION['email'],$otp);

            if ($result2[0]['ErrCode']) {
                echo ("berhasil");
            }
            else {
                echo ($result2[0]['ErrCode']);
            }

        }

        include_once 'views/others/otpverification.php';

    }

    public function forgetpass1()
    {
        $submitPressed = filter_input(INPUT_POST,"btnLogin");
        if ($submitPressed) {
            $otpgen = rand(100000,999999);
            $email = $_POST['email'];
            $user = new User();
            $user->setUser_email($email);
            $getuserbyemail = $this->userdao->getuserByEmail($user);
            if($getuserbyemail[0]['id']){

                $result = $this->userdao->setOTP($user,$otpgen);

                if (!$result[0]['ErrCode']) {
                    ini_set('display_errors',1);
                    error_reporting(E_ALL);
                
                    $from= "learning@learning.it.maranatha.edu";
                    $to = $email;
                
                    $subject = "Kiriman Kode OTP";
                    $message =  $otpgen." adalah Kode OTP untuk proses mengganti password";
                    $headers = "Dari:" . $from;
                
                    mail($to,$subject,$message,$headers);
                }
                else {
                    echo($result[0]['ErrMsg']);
                }
            }
        }
        include_once './views/others/emailsearchpass.php';
    }

    public function forgetpass2()
    {
        $submitPressed = filter_input(INPUT_POST,"verif");
        if ($submitPressed) {
            $otp = $_POST['otp'];

            $result2 = $this->userdao->LoginOTP($_SESSION['email'],$otp);

            if ($result2[0]['ErrCode']) {
            }
            else {
                echo ($result2[0]['ErrCode']);
            }

        }
        include_once 'views/others/otpverification.php';
    }

    public function forgetpass3()
    {
        $email = $_GET['email'];
        $submitPressed = filter_input(INPUT_POST,"btnSubmit");
        if ($submitPressed) {
            $pass = $_POST['pass'];
            $repass = $_POST['repass'];
            if (strlen($pass)<8) {
                echo ("Minimal karakter adalah 8");
            }
            elseif ($pass != $repass) {
                echo ("Kedua input Password tidak sesuai");
            }
            else {
                $result = $this->userdao->changepass($email,$pass);
                if (!$result[0]['ErrCode']) {
                    echo ("<script>alert('Password berhasil Diubah')</script>");
                    $this->Logout();
                }
                else {
                    echo("<script>alert('Password tidak berhasil Diubah')</script>");
                }
            }
        }
        include_once './views/others/forgetpass.php';
    }

    public function sulogin(){
        $submitPressed = filter_input(INPUT_POST,"btnLogin");
        if ($submitPressed) {
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $pass = md5($pass);

            $user = new User();
            $user->setUser_email($email);
            $user->setUser_password($pass);

            // var_dump($user);
            $result = $this->userdao->Loginsu($user);
            if(isset($result[0]['ErrCode'])){
                echo($result[0]['ErrMsg']);
            }
            else{
                $_SESSION['session'] = true;

                $_SESSION['id'] = $result[0]['id'];
                $_SESSION['status'] = $result[0]['stat'];
                $_SESSION['fullname'] = $result[0]['fullname'];

                header("location:indexsu.php");
            }

        }
        include_once 'views/others/loginsuperadmin.php';
    }

    public function Logout(){
        session_unset();
        session_destroy();

        header("location:index.php");
    }

    public function Logoutsu(){
        session_unset();
        session_destroy();

        header("location:indexsu.php");
    }

    public function addsiswa(){
        
        error_reporting(0);
        $submitPressed = $_POST["btnSubmit"];
        if ($submitPressed) {

            $name = $_POST["fullname"];
            $induk = $_POST["induk"];
            $handphone = $_POST["handphone"];
            $address = $_POST["address"];
            $email = $_POST["email"];
            

            $user = new User();
            $user->setUser_id('');
            $user->setUser_Fullname($name);
            $user->setUser_nomor_induk($induk);
            $user->setUser_sekolah($_SESSION['id_sekolah']);
            $user->setUser_mobilephone($handphone);
            $user->setUser_address($address);
            $user->setUser_role('3');
            $user->setUser_email($email);
            $uploadpic = 'uploads/pic_user/';
            if (isset($_FILES['profilepic']['name'])) {
                $user->setUser_profilepic(pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION));
            }

            
            $result = $this->userdao->addsiswa($user);
            $insertedQ = $result[0];

            if (!$insertedQ['ErrCode']) {
                $this->uploadFile('profilepic', $uploadpic, $result[0]['id']);
                echo $result[0]['ErrMsg'];
            }
        }
        if ($result) {
            $this->DaftarMurid();
        }
        else {
            include_once 'views\admin\admin_studentadd.php';
        }
    }

    public function updatesiswa(){
        error_reporting(0);
        $datasiswa = $this->userdao->getUserData('id','','');
        $submitPressed = $_POST["btnSubmit"];
        if ($submitPressed) {

            $name = $_POST["fullname"];
            $induk = $_POST["induk"];
            $handphone = $_POST["handphone"];
            $address = $_POST["address"];
            $email = $_POST["email"];
            $id = $_GET['id'];

            $user = new User();
            $user->setUser_id($id);
            $user->setUser_Fullname($name);
            $user->setUser_nomor_induk($induk);
            $user->setUser_sekolah($_SESSION['id_sekolah']);
            $user->setUser_mobilephone($handphone);
            $user->setUser_address($address);
            $user->setUser_role('3');
            $user->setUser_email($email);
            $uploadpic = 'uploads/pic_user/';
            if (isset($_FILES['profilepic']['name'])) {
                $user->setUser_profilepic(pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION));
            }

            $result = $this->userdao->addsiswa($user);
            $insertedQ = $result[0];

            if (!$insertedQ['ErrCode']) {
                $this->uploadFile('profilepic', $uploadpic, $result[0]['id']);
                echo $result[0]['ErrMsg'];
            }
        }
        $id = $_GET['id'];
        $updatesiswa = $this->userdao->getUserData($id,'','');
        $updatesiswa = $updatesiswa[0];
        include_once 'views\admin\admin_studentedit.php';
    }

    public function DeleteSiswa()
    {
        error_reporting(0);

        $id = $_GET['id'];

        $user = new User();
        $user->setUser_id($id);
        $uploadpic = 'uploads/pic_user/'.$id.'.jpg';

        $result = $this->userdao->delsiswa($user);
        $delete = $result[0];

        if (!$delete['ErrCode']) {
            unlink($uploadpic);
            echo $delete['ErrMsg'];

            $this->DaftarMurid();
        }

    }

    public function addguru(){
        error_reporting(0);
        $listmapeladd = $this->mapeldao->getactivemapel($_SESSION['id_sekolah'],'');
        $submitPressed = $_POST["btnSubmit"];
        if ($submitPressed) {

            $name = $_POST["fullname"];
            $induk = $_POST["induk"];
            $handphone = $_POST["handphone"];
            $address = $_POST["address"];
            $email = $_POST["email"];
            $mapel = $_POST["mapel"];
            
            $user = new User();
            $user->setUser_id('');
            $user->setUser_Fullname($name);
            $user->setUser_nomor_induk($induk);
            $user->setUser_sekolah($_SESSION['id_sekolah']);
            $user->setUser_mobilephone($handphone);
            $user->setUser_address($address);
            $user->setUser_role('2');
            $user->setUser_email($email);
            $uploadpic = 'uploads/pic_user/';
            if (isset($_FILES['profilepic']['name'])) {
                $user->setUser_profilepic(pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION));
            }

            $result = $this->userdao->addguru($user);
            $insertedQ = $result[0];
            if (!$insertedQ['ErrCode']) {
                $this->uploadFile('profilepic', $uploadpic, $result[0]['id']);
                echo $result[0]['ErrMsg'];
            }
            foreach ($mapel as $adhitya) {
                $mapelguru = new MapelGuru();
                $mapelguru->setMapel($adhitya);
                $mapelguru->setUserid($result[0]['id']);
                
                $this->mapelgurudao->addmapelguru($mapelguru);
            }
        }
        include_once 'views\admin\admin_teacheradd.php';
    }
    public function updateguru(){
        error_reporting(0);
        $listmapeledit = $this->mapeldao->getactivemapel($_SESSION['id_sekolah'],'');
        // $dataguru = $this->userdao->getUserData('id','','');
        $submitPressed = filter_input(INPUT_POST,"btnSubmit");
        if ($submitPressed) {

            $name = $_POST["fullname"];
            $induk = $_POST["induk"];
            $handphone = $_POST["handphone"];
            $email = $_POST["email"];
            $mapel = $_POST["mapel"];
            $id = filter_input(INPUT_GET,'id');

            $user = new User();
            $mapelguru = new MapelGuru();
            $mapelguru->setUserid($id);
            $user->setUser_id($id);
            $user->setUser_Fullname($name);
            $user->setUser_nomor_induk($induk);
            $user->setUser_sekolah($_SESSION['id_sekolah']);
            $user->setUser_mobilephone($handphone);
            $user->setUser_role('2');
            $user->setUser_email($email);
            $uploadpic = 'uploads/pic_user/';
            if (isset($_FILES['profilepic']['name'])) {
                $user->setUser_profilepic(pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION));
            }

            $result = $this->userdao->addsiswa($user);
            // var_dump($result);
            $insertedQ = $result[0];

            if (!$insertedQ['ErrCode']) {
                $this->uploadFile('profilepic', $uploadpic, $result[0]['id']);
                echo $result[0]['ErrMsg'];
            }

            if ($mapel) {
                $this->mapelgurudao->delmapelguru($mapelguru);
                foreach ($mapel as $adhitya) {
                    // var_dump($adhitya);
                    $mapelguru = new MapelGuru();
                    $mapelguru->setMapel($adhitya);
                    $mapelguru->setUserid($result[0]['id']);
                    $this->mapelgurudao->addmapelguru($mapelguru);
                }
            }
        }
        $id = filter_input(INPUT_GET,'id');
        if(isset($id)){
            $selectmapel = $this->mapelgurudao->getMapelGuru($id);
            $updateguru = $this->userdao->getUserData($id,'','');
            $updateguru = $updateguru[0];
        }
        include_once 'views\admin\admin_teacheredit.php';
    }

    public function DeleteGuru()
    {
        error_reporting(0);

        $id = $_GET['id'];

        $user = new User();
        $user->setUser_id($id);
        $uploadpic = 'uploads/pic_user/'.$id.'.jpg';

        
        $result = $this->userdao->delguru($user);
        $delete = $result[0];
        
        if ($delete['ErrCode']) {
            // var_dump($uploadpic);
            unlink($uploadpic);
            echo $delete['ErrMsg'];

            $this->DaftarGuru();
        }
        
    }

    public function uploadFile($fileInputName, $targetDirectory, $fileName)
    {
        if (isset($_FILES[$fileInputName]['name'])) {
            $fileExtension = 'jpg';
            $newFileName = $fileName . '.' . $fileExtension;
            $targetFile = $targetDirectory . $newFileName;
            if ($_FILES[$fileInputName]['size'] > 1024 * 2048) {
                echo '<div>Upload error. File size exceed 2MB</div>';
            } else {
                move_uploaded_file($_FILES[$fileInputName]['tmp_name'], $targetFile);
            }
        }
    }
}
