<?php

class MapelDaoImpl{
    

    public function getmapel($sekolah,$mapel){
        $result = 0;
        $conn = new Database();
        $data = array(
            'idsekolah' => $sekolah,
            'idmapel' => $mapel
        );
        $result = $conn->execute_sp('spGetMapel',$data);
        $conn = null;
        return $result;
    }

    public function getactivemapel($sekolah,$mapel){
        $result = 0;
        $conn = new Database();
        $data = array(
            'idsekolah' => $sekolah,
            'idmapel' => $mapel
        );
        $result = $conn->execute_sp('spGetActiveMapel',$data);
        $conn = null;
        return $result;
    }

    public function addmapel(Mapel $mapel)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'id' => $mapel->getMapel_id(),
            'sekolah' => $mapel->getMapel_sekolah(),
            'kodemapel'=> $mapel->getMapel_kode(),
            'mapelname'=> $mapel->getMapel_name(),
            'peminatan'=> $mapel->getPeminatan(),
            'stat'=> $mapel->getStatus(),
            'profilepic'=> $mapel->getProfilepic()
        );
        $result = $conn->execute_sp('spSetMapel',$data);
        $conn = null;
        return $result;
    }
    public function updatemapel(Mapel $mapel)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'id' => $mapel->getMapel_id(),
            'sekolah' => $mapel->getMapel_sekolah(),
            'kodemapel'=> $mapel->getMapel_kode(),
            'mapelname'=> $mapel->getMapel_name(),
            'peminatan'=> $mapel->getPeminatan(),
            'stat'=> $mapel->getStatus(),
            'profilepic'=> $mapel->getProfilepic()
        );
        $result = $conn->execute_sp('spSetMapel',$data);
        $conn = null;
        return $result;
    }

    

}