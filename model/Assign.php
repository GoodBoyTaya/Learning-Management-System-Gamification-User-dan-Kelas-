<?php

class Assign 
{
    private $assign_id;
    private $assign_kelas;
    private $assign_mapel;

    /**
     * Get the value of assign_id
     */ 
    public function getAssign_id()
    {
        return $this->assign_id;
    }

    /**
     * Set the value of assign_id
     *
     * @return  self
     */ 
    public function setAssign_id($assign_id)
    {
        $this->assign_id = $assign_id;

        return $this;
    }

    /**
     * Get the value of assign_kelas
     */ 
    public function getAssign_kelas()
    {
        return $this->assign_kelas;
    }

    /**
     * Set the value of assign_kelas
     *
     * @return  self
     */ 
    public function setAssign_kelas($assign_kelas)
    {
        $this->assign_kelas = $assign_kelas;

        return $this;
    }

    /**
     * Get the value of assign_mapel
     */ 
    public function getAssign_mapel()
    {
        return $this->assign_mapel;
    }

    /**
     * Set the value of assign_mapel
     *
     * @return  self
     */ 
    public function setAssign_mapel($assign_mapel)
    {
        $this->assign_mapel = $assign_mapel;

        return $this;
    }
}


?>