<?php

class MapelGuruDaoImpl{

    public function getMapelGuru($mapelGuru){
        $result = 0;
        $conn = new Database();
        $data = array(
            'userid' => $mapelGuru,
        );
        $result = $conn->execute_sp('spGetMapelGuru',$data);
        $conn = null;
        return $result;
    }

    public function addmapelguru(MapelGuru $mapelGuru)
    {
          
        $result = 0;
        $conn = new Database();
        $data = array(
            'mapel' => $mapelGuru->getMapel(),
            'userid' => $mapelGuru->getUserid(),
        );
        $result = $conn->execute_sp('spSetMapelGuru',$data);
        $conn = null;
        return $result;
    }

    public function delmapelguru(MapelGuru $mapelGuru){
        $result = 0;
        $conn = new Database();
        $data = array(
            'userid' => $mapelGuru->getUserid(),
        );
        $result = $conn->execute_sp('spDelMapelGuru',$data);
        $conn = null;
        return $result;
    }
}