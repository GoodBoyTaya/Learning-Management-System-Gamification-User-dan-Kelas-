<?php

    include_once 'dao/MapelDaoImpl.php';
    include_once 'model/Mapel.php';

class MapelController{
    
    private $mapeldao;

    public function __construct()
    {
        $this->mapeldao = new MapelDaoImpl();
    }



    public function setmapel()
    {
        $listmapel = $this->mapeldao->getmapel($_SESSION['id_sekolah'],'');
        $submitPressed = filter_input(INPUT_POST,"btnSubmit");
        if ($submitPressed) {

            $namemapel = $_POST["namamapel"];
            $kode = $_POST["kodemapel"];
            $category = $_POST["selectcat"];
            $idsekolah = $_SESSION['id_sekolah'];
            

            $mapel = new Mapel();
            $mapel->setMapel_id('');
            $mapel->setMapel_name($namemapel);
            $mapel->setMapel_kode($kode);
            $mapel->setPeminatan($category);
            $mapel->setStatus('');
            $mapel->setMapel_sekolah($idsekolah);
            $uploadpic = 'uploads/pic_mapel/';
            if (isset($_FILES['mapelpic']['name'])) {
                $mapel->setProfilepic(pathinfo($_FILES['mapelpic']['name'], PATHINFO_EXTENSION));
            }

            
            $result = $this->mapeldao->addmapel($mapel);
            $insertedQ = $result[0];

            if (!$insertedQ['ErrCode']) {
                $this->uploadFile('mapelpic', $uploadpic, $result[0]['id']);
                echo $result[0]['ErrMsg'];
            }
            if ($result) {
                $listmapel = $this->mapeldao->getmapel($_SESSION['id_sekolah'],'');
            }
        }
        include_once './views/admin/admin_courseadd.php'; 
    }

    public function updatemapel()
    {
        // $selectedmapel=$this->mapeldao->getmapel('','id');
        $submitPressed = filter_input(INPUT_POST,"btnSubmit");
        if ($submitPressed) {

            $namemapel = $_POST["namamapel"];
            $kode = $_POST["kodemapel"];
            $category = $_POST["selectcat"];
            $status = $_POST["selectstat"];
            $idsekolah = $_SESSION['id_sekolah'];
            $id = $_GET['id'];
            

            $mapel = new Mapel();
            $mapel->setMapel_id($id);
            $mapel->setMapel_name($namemapel);
            $mapel->setMapel_kode($kode);
            $mapel->setPeminatan($category);
            $mapel->setStatus($status);
            $mapel->setMapel_sekolah($idsekolah);
            $uploadpic = 'uploads/pic_mapel/';
            if (isset($_FILES['mapelpic']['name'])) {
                $mapel->setProfilepic(pathinfo($_FILES['mapelpic']['name'], PATHINFO_EXTENSION));
            }

            
            $result = $this->mapeldao->updatemapel($mapel);
            $insertedQ = $result[0];

            if (!$insertedQ['ErrCode']) {
                $this->uploadFile('mapelpic', $uploadpic, $result[0]['id']);
                echo $result[0]['ErrMsg'];
            }
        }
        $id = $_GET['id'];
        if(isset($id)){
            $updatemapel = $this->mapeldao->getmapel('',$id);
            $updatemapel = $updatemapel[0];
        }
        include_once './views/admin/admin_courseedit.php'; 
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

?>