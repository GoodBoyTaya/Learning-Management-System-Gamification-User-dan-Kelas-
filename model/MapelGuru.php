<?php

class MapelGuru{
    private $id;
    private $mapel;
    private $userid;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of mapel
     */ 
    public function getMapel()
    {
        return $this->mapel;
    }

    /**
     * Set the value of mapel
     *
     * @return  self
     */ 
    public function setMapel($mapel)
    {
        $this->mapel = $mapel;

        return $this;
    }

    /**
     * Get the value of userid
     */ 
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set the value of userid
     *
     * @return  self
     */ 
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }
}