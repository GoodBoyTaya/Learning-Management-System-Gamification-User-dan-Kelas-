<?php 
include_once './dao/MapelDaoImpl.php';
include_once './dao/KelasDaoImpl.php';
include_once './model/Kelas.php';
include_once './model/Mapel.php';
include_once './model/Assign.php';
include_once './model/Mengajar.php';
include_once './model/Jadwal.php';
include_once './model/Anggota.php';
class KelasController
{
    private $kelasdao; 
    private $mapeldao;
    public function __construct() {
        $this->kelasdao = new KelasDaoImpl();
        $this->mapeldao = new MapelDaoImpl();
    }
    public function addkelas()
    {
        $submitPressed = filter_input(INPUT_POST,"btnSubmit");
        if ($submitPressed) {
            $category = $_POST['selcat'];
            $class = $_POST['selclass'];
            $sekolah = $_SESSION['id_sekolah'];
            $result = $this->kelasdao->addkelas($sekolah,$class,$category);
        }
        $listkelas = $this->kelasdao->getkelas($_SESSION['id_sekolah']);
        include_once './views/admin/admin_classadd.php';
    }
    public function editkelas()
    {
        $idkelas = $_GET['id'];
        $editkelas = $this->kelasdao->selectedkelas($idkelas);
        $submitPressed = filter_input(INPUT_POST,"btnSubmit");
        if ($submitPressed) {
            $deskripsi = $_POST['kelas'];
            $tahun = $_POST['tahunajaran'];
            $status = $_POST['selectstat'];
            $idkelas = $_GET['id'];

            $kelas = new Kelas();
            $kelas->setKelas_id($idkelas);
            $kelas->setKelas_deskripsi($deskripsi);
            $kelas->setKelas_tahun_ajaran($tahun);
            $kelas->setKelas_status($status);

            $result = $this->kelasdao->editkelas($kelas);
            if ($result[0]['ErrCode']) {
                header("Refresh:0");
            }
        }
        include_once './views/admin/admin_classedit.php';
    }
    public function addMapelKelas()
    {
        $listmapel = $this->mapeldao->getmapel($_SESSION['id_sekolah'],'');
        $id = $_GET['id'];
        $submitPressed = filter_input(INPUT_POST,"btnSubmit");
        if ($submitPressed) {
            $teacher = $_POST['selteach'];
            $course = $_POST['selcourse'];
            $id = $_GET['id'];
            $assign = new Assign();
            $assign->setAssign_kelas($id);
            $assign->setAssign_mapel($course);
            $result = $this->kelasdao->addassign($assign);
            $insertedQ = $result[0];
            if (!$insertedQ['ErrCode']) {
                $mengajar = new Mengajar();
                $mengajar->setMengajar_user($teacher);
                $mengajar->setMengajar_assign($result[0]['id_assign']);
                $result2 = $this->kelasdao->addMengajar($mengajar);
            }
        }
        $selectedkelas = $this->kelasdao->selectedkelas($id);
        $listassign = $this->kelasdao->getmengajar($id);
        include_once './views/admin/admin_classassigncourse.php';     
    }
    public function addJadwal()
    {
        $id = $_GET['id'];
        $idkelas = explode('-', $id)[0];
        if(isset($id)){
            $selectedassign = $this->kelasdao->getAssign($id);
        }
        $submitPressed = filter_input(INPUT_POST,"btnSubmit");
        if ($submitPressed) {
            $hari = $_POST['selday'];
            $mulai = $_POST['inputjammasuk'];
            $selesai = $_POST['inputjamkeluar'];
            $id = $_GET['id'];
            $jadwal = new Jadwal();
            $jadwal->setJadwal_id('');
            $jadwal->setJadwal_hari($hari);
            $jadwal->setJadwal_mulai($mulai);
            $jadwal->setJadwal_selesai($selesai);
            $jadwal->setJadwal_mengajar($id);
            $result = $this->kelasdao->addJadwal($jadwal);
            header("location:index.php?navito=admin_assignadd&id=".$idkelas);
        }
        include_once './views/admin/admin_scheduleadd.php';
    }
    public function editJadwal()
    {
        $id = $_GET['id'];
        $idkelas = explode('-', $id)[0];
        $selectedschedule = $this->kelasdao->getJadwal($id);
        $submitPressed = filter_input(INPUT_POST,"btnSubmit");
        if ($submitPressed) {
            $hari = $_POST['selday'];
            $mulai = $_POST['inputjammasuk'];
            $selesai = $_POST['inputjamkeluar'];
            $id = $_GET['id'];
            $jadwal = new Jadwal();
            $jadwal->setJadwal_id($id);
            $jadwal->setJadwal_hari($hari);
            $jadwal->setJadwal_mulai($mulai);
            $jadwal->setJadwal_selesai($selesai);
            $jadwal->setJadwal_mengajar('');
            $result = $this->kelasdao->updateJadwal($jadwal);
            header("location:index.php?navito=admin_assignadd&id=".$idkelas);
        }
        include_once './views/admin/admin_scheduleedit.php';
    }
    public function DeleteSelectedRow()
    {
        $idjadwal = $_GET['idjadwal'];
        $idmengajar = $_GET['idmengajar'];
        $idassign = $_GET['idassign'];
        $idkelas = explode('-', $idassign)[0];
        $assign = new Assign();
        $jadwal = new Jadwal();
        $mengajar = new Mengajar();
        if ($idjadwal != '') {
            $jadwal->setJadwal_id($idjadwal);
            $deljadwal = $this->kelasdao->deleteJadwal($jadwal);
            // var_dump($deljadwal);
        }
        $assign->setAssign_id($idassign);
        $mengajar->setMengajar_id($idmengajar);
        $delmengajar = $this->kelasdao->deleteMengajar($mengajar);
        if ($delmengajar[0]['ErrCode']) {
            $delassign = $this->kelasdao->deleteAssign($assign);
            if ($delassign[0]['ErrCode']) {
                 header("location:index.php?navito=admin_assignadd&id=".$idkelas);
            }
        }
    }
    public function GetAnggota()
    {
        $id = $_GET['id'];
        if(isset($id)){
            $selectedkelas = $this->kelasdao->selectedkelas($id);
            $listanggota = $this->kelasdao->getanggota($id);
        }
        include_once './views/admin/admin_classmemberdata.php';
    }
    public function addAnggota()
    {
        $kelas = $_GET['idkelas'];
        $count = $this->kelasdao->countAnggota($kelas);
        include_once './views/admin/admin_classmemberadd.php';
    }
    public function delAnggota()
    {
        $id = $_GET['id'];
        $kelas = explode('-', $id)[0];
        
        $anggota = new Anggota();
        $anggota->setAnggota_id($id);

        $delete = $this->kelasdao->delanggota($anggota);
        header("location:index.php?navito=admin_classmemberdata&id=".$kelas);
    }
}