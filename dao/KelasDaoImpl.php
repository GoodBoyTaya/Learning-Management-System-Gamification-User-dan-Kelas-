<?php

class KelasDaoImpl{

    public function getkelas($sekolah){
        $result = 0;
        $conn = new Database();
        $data = array(
            'idsekolah' => $sekolah
        );
        $result = $conn->execute_sp('spGetKelas',$data);
        $conn = null;
        return $result;
    }

    public function selectedkelas($kelas)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'id' => $kelas
        );
        $result = $conn->execute_sp('spGetSelectedKelas',$data);
        $conn = null;
        return $result;
    }

    public function addkelas($sekolah,$kelas,$peminatan)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'sekolah' => $sekolah,
            'kelas' => $kelas,
            'peminatan' => $peminatan
        );
        $result = $conn->execute_sp('spSetKelas',$data);
        $conn = null;
        return $result;
    }

    public function editkelas(Kelas $kelas)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'idkelas' => $kelas->getKelas_id(),
            'tahun_ajaran' => $kelas->getKelas_tahun_ajaran(),
            'stat' => $kelas->getKelas_status(),
            'deskripsi' => $kelas->getKelas_deskripsi()
        );
        $result = $conn->execute_sp('spUpdateKelas',$data);
        $conn = null;
        return $result;
    }

    public function getmengajar($kelas)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'idkelas' => $kelas
        );
        $result = $conn->execute_sp('spGetMengajar',$data);
        $conn = null;
        return $result;
    }

    public function addassign(Assign $assign)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'kelas' => $assign->getAssign_kelas(),
            'mapel' => $assign->getAssign_mapel()
        );
        $result = $conn->execute_sp('spSetAssign',$data);
        $conn = null;
        return $result;
    }

    public function addMengajar(Mengajar $mengajar)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'iduser' => $mengajar->getMengajar_user(),
            'assign' => $mengajar->getMengajar_assign()
        );
        $result = $conn->execute_sp('spSetMengajar',$data);
        $conn = null;
        return $result;
    }

    public function getAssign($idassign)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'id' => $idassign
        );
        $result = $conn->execute_sp('spGetAssign',$data);
        $conn = null;
        return $result;
    }

    public function addJadwal(Jadwal $jadwal)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'idjadwal' => $jadwal->getJadwal_id(),
            'hari' => $jadwal->getJadwal_hari(),
            'mulai' => $jadwal->getJadwal_mulai(),
            'selesai' => $jadwal->getJadwal_selesai(),
            'mengajar' => $jadwal->getJadwal_mengajar()
        );
        $result = $conn->execute_sp('spSetJadwal',$data);
        $conn = null;
        return $result;
    }

    public function getJadwal($idjadwal)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'id' => $idjadwal
        );
        $result = $conn->execute_sp('spGetJadwal',$data);
        $conn = null;
        return $result;
    }

    public function updateJadwal(Jadwal $jadwal)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'idjadwal' => $jadwal->getJadwal_id(),
            'hari' => $jadwal->getJadwal_hari(),
            'mulai' => $jadwal->getJadwal_mulai(),
            'selesai' => $jadwal->getJadwal_selesai(),
            'mengajar' => $jadwal->getJadwal_mengajar()
        );
        $result = $conn->execute_sp('spSetJadwal',$data);
        $conn = null;
        return $result;
    }

    public function deleteAssign(Assign $assign)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'idassign' => $assign->getAssign_id()
        );
        $result = $conn->execute_sp('spDelAssign',$data);
        $conn = null;
        return $result;
    }

    public function deleteMengajar(Mengajar $mengajar)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'idmengajar' => $mengajar->getMengajar_id()
        );
        $result = $conn->execute_sp('spDelMengajar',$data);
        $conn = null;
        return $result;
    }

    public function deleteJadwal(Jadwal $jadwal)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'idjadwal' => $jadwal->getJadwal_id()
        );
        $result = $conn->execute_sp('spDelJadwal',$data);
        $conn = null;
        return $result;
    }

    public function delanggota(Anggota $anggota)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'idanggota' => $anggota->getAnggota_id()
        );
        $result = $conn->execute_sp('spDelAnggota',$data);
        $conn = null;
        return $result;
    }

    public function getanggota($kelas)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'idkelas' => $kelas,
            'jabatan' => ''
        );
        $result = $conn->execute_sp('spGetAnggota',$data);
        $conn = null;
        return $result;
    }

    public function countAnggota($kelas)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'idkelas' => $kelas,
        );
        $result = $conn->execute_sp('spCountAnggota',$data);
        $conn = null;
        return $result;
    }
}

?>