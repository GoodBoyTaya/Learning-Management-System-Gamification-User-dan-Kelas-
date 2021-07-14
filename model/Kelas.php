<?php

class Kelas{

    private $kelas_id;
    private $kelas_abjad;
    private $kelas_tahun_ajaran;
    private $kelas_deskripsi;
    private $kelas_master_kelas;
    private $kelas_status;
    

    /**
     * Get the value of kelas_master_kelas
     */ 
    public function getKelas_master_kelas()
    {
        return $this->kelas_master_kelas;
    }

    /**
     * Set the value of kelas_master_kelas
     *
     * @return  self
     */ 
    public function setKelas_master_kelas($kelas_master_kelas)
    {
        $this->kelas_master_kelas = $kelas_master_kelas;

        return $this;
    }

    /**
     * Get the value of kelas_deskripsi
     */ 
    public function getKelas_deskripsi()
    {
        return $this->kelas_deskripsi;
    }

    /**
     * Set the value of kelas_deskripsi
     *
     * @return  self
     */ 
    public function setKelas_deskripsi($kelas_deskripsi)
    {
        $this->kelas_deskripsi = $kelas_deskripsi;

        return $this;
    }

    /**
     * Get the value of kelas_tahun_ajaran
     */ 
    public function getKelas_tahun_ajaran()
    {
        return $this->kelas_tahun_ajaran;
    }

    /**
     * Set the value of kelas_tahun_ajaran
     *
     * @return  self
     */ 
    public function setKelas_tahun_ajaran($kelas_tahun_ajaran)
    {
        $this->kelas_tahun_ajaran = $kelas_tahun_ajaran;

        return $this;
    }

    /**
     * Get the value of kelas_abjad
     */ 
    public function getKelas_abjad()
    {
        return $this->kelas_abjad;
    }

    /**
     * Set the value of kelas_abjad
     *
     * @return  self
     */ 
    public function setKelas_abjad($kelas_abjad)
    {
        $this->kelas_abjad = $kelas_abjad;

        return $this;
    }

    /**
     * Get the value of kelas_id
     */ 
    public function getKelas_id()
    {
        return $this->kelas_id;
    }

    /**
     * Set the value of kelas_id
     *
     * @return  self
     */ 
    public function setKelas_id($kelas_id)
    {
        $this->kelas_id = $kelas_id;

        return $this;
    }

    /**
     * Get the value of kelas_status
     */ 
    public function getKelas_status()
    {
        return $this->kelas_status;
    }

    /**
     * Set the value of kelas_status
     *
     * @return  self
     */ 
    public function setKelas_status($kelas_status)
    {
        $this->kelas_status = $kelas_status;

        return $this;
    }
}
?>