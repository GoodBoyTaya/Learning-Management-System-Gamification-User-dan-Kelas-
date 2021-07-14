<?php

class Jadwal
{
    private $jadwal_id;
    private $jadwal_hari;
    private $jadwal_mulai;
    private $jadwal_selesai;
    private $jadwal_mengajar;

    /**
     * Get the value of jadwal_id
     */ 
    public function getJadwal_id()
    {
        return $this->jadwal_id;
    }

    /**
     * Set the value of jadwal_id
     *
     * @return  self
     */ 
    public function setJadwal_id($jadwal_id)
    {
        $this->jadwal_id = $jadwal_id;

        return $this;
    }

    /**
     * Get the value of jadwal_hari
     */ 
    public function getJadwal_hari()
    {
        return $this->jadwal_hari;
    }

    /**
     * Set the value of jadwal_hari
     *
     * @return  self
     */ 
    public function setJadwal_hari($jadwal_hari)
    {
        $this->jadwal_hari = $jadwal_hari;

        return $this;
    }

    /**
     * Get the value of jadwal_mulai
     */ 
    public function getJadwal_mulai()
    {
        return $this->jadwal_mulai;
    }

    /**
     * Set the value of jadwal_mulai
     *
     * @return  self
     */ 
    public function setJadwal_mulai($jadwal_mulai)
    {
        $this->jadwal_mulai = $jadwal_mulai;

        return $this;
    }

    /**
     * Get the value of jadwal_selesai
     */ 
    public function getJadwal_selesai()
    {
        return $this->jadwal_selesai;
    }

    /**
     * Set the value of jadwal_selesai
     *
     * @return  self
     */ 
    public function setJadwal_selesai($jadwal_selesai)
    {
        $this->jadwal_selesai = $jadwal_selesai;

        return $this;
    }

    /**
     * Get the value of jadwal_mengajar
     */ 
    public function getJadwal_mengajar()
    {
        return $this->jadwal_mengajar;
    }

    /**
     * Set the value of jadwal_mengajar
     *
     * @return  self
     */ 
    public function setJadwal_mengajar($jadwal_mengajar)
    {
        $this->jadwal_mengajar = $jadwal_mengajar;

        return $this;
    }
}
?>