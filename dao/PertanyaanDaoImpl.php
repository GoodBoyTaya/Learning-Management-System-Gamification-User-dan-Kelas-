<?php

class PertanyaanDaoImpl{

    public function getPertanyaanData()
    {
        $link = PDOUtil::createConnection();
        $query = "SELECT pertanyaan_id, pertanyaan_tipe, pertanyaan_isi, pertanyaan_level, 
        pertanyaan_gambar, pertanyaan_status, pertanyaan_materi, pertanyaan_created_by, 
        pertanyaan_created_at, pertanyaan_updated_at FROM tbpertanyaan";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Pertanyaan');
        PDOUtil::closeConnection($link);
        return $result;
    }

    public function setPertanyaan(Pertanyaan $pertanyaan){
        $result = 0;
        $conn = new Database();
        $data = array(
            'id' => $pertanyaan->getPertanyaan_id(),
            'bab' => $pertanyaan->getPertanyaan_bab(),
            'tipe' => $pertanyaan->getPertanyaan_tipe(),
            'isi' => $pertanyaan->getPertanyaan_isi(),
            'gambar' => $pertanyaan->getPertanyaan_gambar(),
            'level' => $pertanyaan->getPertanyaan_level(),
            'status' => $pertanyaan->getPertanyaan_status(),
            'created_by' => $pertanyaan->getPertanyaan_created_by()
        );
        var_dump($data);
        $result = $conn->execute_sp('spPertanyaanSet',$data);
        return $result;
    }
    
    public function setJawaban(Jawaban $jawaban){
        $result = 0;
        $conn = new Database();
        $data = array(
            $jawaban->getJawaban_id(),
            $jawaban->getJawaban_pertanyaan(),
            $jawaban->getJawaban_isi(),
            $jawaban->getJawaban_benar(),
            $jawaban->getJawaban_gambar()
        );
        $result = $conn->execute_sp('spJawabanSet',$data);
        return $result;
    }
    // public function insertPertanyaan(Pertanyaan $pertanyaan){
    //     $result = 0;
    //     $link = PDOUtil::createConnection();

    //     $query = "INSERT into pertanyaan (pertanyaan_tipe, pertanyaan_isi, pertanyaan_level, pertanyaan_gambar, 
    //     pertanyaan_aktif, pertanyaan_materi, pertanyaan_pembuat, pertanyaan_created_at) 
    //     VALUES (?,?,?,?,?,?,?,NOW())";
    //     $stmt = $link->prepare($query);
    //     $stmt->bindValue(1, $pertanyaan->getPertanyaan_tipe());
    //     $stmt->bindValue(2, $pertanyaan->getPertanyaan_isi());
    //     $stmt->bindValue(3, $pertanyaan->getPertanyaan_level());
    //     $stmt->bindValue(4, $pertanyaan->getPertanyaan_gambar());
    //     $stmt->bindValue(5, $pertanyaan->getPertanyaan_aktif());
    //     $stmt->bindValue(6, $pertanyaan->getPertanyaan_materi());
    //     $stmt->bindValue(7, $pertanyaan->getPertanyaan_pembuat());

    //     $link->beginTransaction();
    //     if ($stmt->execute()) {
    //         $link->commit();
    //         $result = 1;
    //     } else {
    //         $link->rollBack();
    //     }
    //     PDOUtil::closeConnection($link);
    //     return $result;
    // }

    // public function setPertanyaanAktif(Pertanyaan $pertanyaan)
    // {
    //     $result=0;
    //     $link = PDOUtil::createConnection();
    //     $query = "UPDATE pertanyaan SET pertanyaan_aktif=?, pertanyaan_updated_at=NOW()
    //     WHERE pertanyaan_id = ?";
    //     $stmt = $link->prepare($query);
    //     $stmt->bindValue(1, $pertanyaan->getPertanyaan_aktif());
    //     $stmt->bindValue(2, $pertanyaan->getPertanyaan_id());

    //     $link->beginTransaction();
    //     if ($stmt->execute()) {
    //         $link->commit();
    //         $result=1;
    //     } else {
    //         $link->rollBack();
    //     }
    //     PDOUtil::closeConnection($link);
    //     return $result;
    // }
    
}