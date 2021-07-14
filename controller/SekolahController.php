<?php
include_once './dao/SekolahDaoImpl.php';
include_once './model/Sekolah.php';

class SekolahController{

    private $sekolahdao;
    
    public function __construct() {
        $this->sekolahdao = new SekolahDaoimpl();
    }

    public function getsekolah()
    {
        $listsekolah = $this->sekolahdao->getSekolahData('');
        include_once './views/superadmin/superadmin_schooldata.php';  
    }
    
    public function addSekolah()
    {   
        error_reporting(0);
        $getsekolah = $this->sekolahdao->getSekolahData('');
        $submitPressed = $_POST["btnSubmit"];
        if ($submitPressed) {

            $name = $_POST["name"];
            $induk = $_POST["npsn"];
            $jenjang = $_POST["jenjang"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            $email = $_POST["email"];
            

            $sekolah = new Sekolah();
            $sekolah->setSekolah_name($name);
            $sekolah->setSekolah_npsn($induk);
            $sekolah->setSekolah_jenjang($jenjang);
            $sekolah->setSekolah_phone($phone);
            $sekolah->setSekolah_address($address);
            $sekolah->setSekolah_email($email);
            $uploadpic = 'uploads/pic_sekolah/';
            if (isset($_FILES['profilepic']['name'])) {
                $sekolah->setSekolah_logo(pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION));
            }

            
            $result = $this->sekolahdao->addSekolah ($sekolah);
            $insertedQ = $result[0];

            if (!$insertedQ['ErrCode']) {
                $this->uploadFile('profilepic', $uploadpic, $result[0]['id']);
                echo $result[0]['ErrMsg'];
            }
        }
        if ($result) {
            $this->getsekolah();
        }
        else{
            include_once './views/superadmin/superadmin_schooladd.php';
        }
    }
    public function editSekolah()
    {
        // error_reporting(0);
        $id = $_GET['id'];
        $getsekolah = $this->sekolahdao->getSekolahData($id);
        $submitPressed = $_POST["btnSubmit"];
        if ($submitPressed) {

            $name = $_POST["name"];
            $induk = $_POST["npsn"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            $email = $_POST["email"];
            $status = $_POST["selectstat"];
            $id = $_GET['id'];
            

            $sekolah = new Sekolah();
            $sekolah->setSekolah_id($id);
            $sekolah->setSekolah_name($name);
            $sekolah->setSekolah_npsn($induk);
            $sekolah->setSekolah_phone($phone);
            $sekolah->setSekolah_address($address);
            $sekolah->setSekolah_email($email);
            $sekolah->setSekolah_status($status);
            $uploadpic = 'uploads/pic_sekolah/';
            if (isset($_FILES['profilepic']['name'])) {
                $sekolah->setSekolah_logo(pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION));
            }
            
            $result = $this->sekolahdao->editSekolah($sekolah);
            $insertedQ = $result[0];

            if (!$insertedQ['ErrCode']) {
                $this->uploadFile('profilepic', $uploadpic, $result[0]['id']);
                echo $result[0]['ErrMsg'];
            }
        }
        $id = $_GET['id'];
        if(isset($id)){
            $getsekolah = $this->sekolahdao->getSekolahData($id);
        }
            include_once './views/superadmin/superadmin_schooledit.php';
    }
    public function uploadFile($fileInputName, $targetDirectory, $fileName)
    {
        if (isset($_FILES[$fileInputName]['name'])) {
            $fileExtension = 'png';
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

?>