<?php

class Mapel {
    private $mapel_id;
    private $mapel_sekolah;
    private $mapel_kode;
    private $mapel_name;
    private $peminatan;
    private $status;
    private $profilepic;

   

    /**
     * Get the value of profilepic
     */ 
    public function getProfilepic()
    {
        return $this->profilepic;
    }

    /**
     * Set the value of profilepic
     *
     * @return  self
     */ 
    public function setProfilepic($profilepic)
    {
        $this->profilepic = $profilepic;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of mapel_name
     */ 
    public function getMapel_name()
    {
        return $this->mapel_name;
    }

    /**
     * Set the value of mapel_name
     *
     * @return  self
     */ 
    public function setMapel_name($mapel_name)
    {
        $this->mapel_name = $mapel_name;

        return $this;
    }

    /**
     * Get the value of peminatan
     */ 
    public function getPeminatan()
    {
        return $this->peminatan;
    }

    /**
     * Set the value of peminatan
     *
     * @return  self
     */ 
    public function setPeminatan($peminatan)
    {
        $this->peminatan = $peminatan;

        return $this;
    }

    /**
     * Get the value of mapel_kode
     */ 
    public function getMapel_kode()
    {
        return $this->mapel_kode;
    }

    /**
     * Set the value of mapel_kode
     *
     * @return  self
     */ 
    public function setMapel_kode($mapel_kode)
    {
        $this->mapel_kode = $mapel_kode;

        return $this;
    }

    /**
     * Get the value of mapel_sekolah
     */ 
    public function getMapel_sekolah()
    {
        return $this->mapel_sekolah;
    }

    /**
     * Set the value of mapel_sekolah
     *
     * @return  self
     */ 
    public function setMapel_sekolah($mapel_sekolah)
    {
        $this->mapel_sekolah = $mapel_sekolah;

        return $this;
    }

    /**
     * Get the value of mapel_id
     */ 
    public function getMapel_id()
    {
        return $this->mapel_id;
    }

    /**
     * Set the value of mapel_id
     *
     * @return  self
     */ 
    public function setMapel_id($mapel_id)
    {
        $this->mapel_id = $mapel_id;

        return $this;
    }
}