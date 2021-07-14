<?php

class SekolahDaoimpl{
    
    public function getSekolahData($sekolah){
        $result = 0;
        $conn = new Database();
        $data = array(
            'idsekolah' => $sekolah
        );
        $result = $conn->execute_sp('spGetSekolah',$data);
        $conn = null;
        return $result;
    }
    public function addSekolah(Sekolah $sekolah)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'npsn' => $sekolah->getSekolah_npsn(),
            'nameschool' => $sekolah->getSekolah_name(),
            'address' => $sekolah->getSekolah_address(),
            'email' => $sekolah->getSekolah_email(),
            'phone' => $sekolah->getSekolah_phone(),
            'jenjang' => $sekolah->getSekolah_jenjang(),
            'logo' => $sekolah->getSekolah_logo()
        );
        $result = $conn->execute_sp('spSetSekolah',$data);
        $conn = null;
        return $result;
    }
    public function editSekolah(Sekolah $sekolah)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'id' => $sekolah->getSekolah_id(),
            'nameschool' => $sekolah->getSekolah_name(),
            'npsn' => $sekolah->getSekolah_npsn(),
            'address' => $sekolah->getSekolah_address(),
            'email' => $sekolah->getSekolah_email(),
            'phone' => $sekolah->getSekolah_phone(),
            'stat' => $sekolah->getSekolah_status(),
            'pic' => $sekolah->getSekolah_logo()
        );
        $result = $conn->execute_sp('spUpdateSekolah',$data);
        $conn = null;
        return $result;
    }

}