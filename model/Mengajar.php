<?php

class Mengajar
{
    private $mengajar_id;
    private $mengajar_user;
    private $mengajar_assign;

    /**
     * Get the value of mengajar_id
     */ 
    public function getMengajar_id()
    {
        return $this->mengajar_id;
    }

    /**
     * Set the value of mengajar_id
     *
     * @return  self
     */ 
    public function setMengajar_id($mengajar_id)
    {
        $this->mengajar_id = $mengajar_id;

        return $this;
    }

    /**
     * Get the value of mengajar_user
     */ 
    public function getMengajar_user()
    {
        return $this->mengajar_user;
    }

    /**
     * Set the value of mengajar_user
     *
     * @return  self
     */ 
    public function setMengajar_user($mengajar_user)
    {
        $this->mengajar_user = $mengajar_user;

        return $this;
    }

    /**
     * Get the value of mengajar_assign
     */ 
    public function getMengajar_assign()
    {
        return $this->mengajar_assign;
    }

    /**
     * Set the value of mengajar_assign
     *
     * @return  self
     */ 
    public function setMengajar_assign($mengajar_assign)
    {
        $this->mengajar_assign = $mengajar_assign;

        return $this;
    }
}

?>