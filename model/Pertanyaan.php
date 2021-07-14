<?php

class Pertanyaan
{
    private $pertanyaan_id;
    private $pertanyaan_tipe;
    private $pertanyaan_isi;
    private $pertanyaan_level;
    private $pertanyaan_gambar;
    private $pertanyaan_status;
    private $pertanyaan_bab;
    private $pertanyaan_created_by;
    private $pertanyaan_created_at;
    private $pertanyaan_updated_at;


    /**
     * Get the value of pertanyaan_id
     */
    public function getPertanyaan_id()
    {
        return $this->pertanyaan_id;
    }

    /**
     * Set the value of pertanyaan_id
     *
     * @return  self
     */
    public function setPertanyaan_id($pertanyaan_id)
    {
        $this->pertanyaan_id = $pertanyaan_id;

        return $this;
    }

    /**
     * Get the value of pertanyaan_tipe
     */
    public function getPertanyaan_tipe()
    {
        return $this->pertanyaan_tipe;
    }

    /**
     * Set the value of pertanyaan_tipe
     *
     * @return  self
     */
    public function setPertanyaan_tipe($pertanyaan_tipe)
    {
        $this->pertanyaan_tipe = $pertanyaan_tipe;

        return $this;
    }

    /**
     * Get the value of pertanyaan_isi
     */
    public function getPertanyaan_isi()
    {
        return $this->pertanyaan_isi;
    }

    /**
     * Set the value of pertanyaan_isi
     *
     * @return  self
     */
    public function setPertanyaan_isi($pertanyaan_isi)
    {
        $this->pertanyaan_isi = $pertanyaan_isi;

        return $this;
    }

    /**
     * Get the value of pertanyaan_level
     */
    public function getPertanyaan_level()
    {
        return $this->pertanyaan_level;
    }

    /**
     * Set the value of pertanyaan_level
     *
     * @return  self
     */
    public function setPertanyaan_level($pertanyaan_level)
    {
        $this->pertanyaan_level = $pertanyaan_level;

        return $this;
    }

    /**
     * Get the value of pertanyaan_gambar
     */
    public function getPertanyaan_gambar()
    {
        return $this->pertanyaan_gambar;
    }

    /**
     * Set the value of pertanyaan_gambar
     *
     * @return  self
     */
    public function setPertanyaan_gambar($pertanyaan_gambar)
    {
        $this->pertanyaan_gambar = $pertanyaan_gambar;

        return $this;
    }

    /**
     * Get the value of pertanyaan_status
     */
    public function getPertanyaan_status()
    {
        return $this->pertanyaan_status;
    }

    /**
     * Set the value of pertanyaan_status
     *
     * @return  self
     */
    public function setPertanyaan_status($pertanyaan_status)
    {
        $this->pertanyaan_status = $pertanyaan_status;

        return $this;
    }


    /**
     * Get the value of pertanyaan_created_at
     */
    public function getPertanyaan_created_at()
    {
        return $this->pertanyaan_created_at;
    }

    /**
     * Set the value of pertanyaan_created_at
     *
     * @return  self
     */
    public function setPertanyaan_created_at($pertanyaan_created_at)
    {
        $this->pertanyaan_created_at = $pertanyaan_created_at;

        return $this;
    }

    /**
     * Get the value of pertanyaan_updated_at
     */
    public function getPertanyaan_updated_at()
    {
        return $this->pertanyaan_updated_at;
    }

    /**
     * Set the value of pertanyaan_updated_at
     *
     * @return  self
     */
    public function setPertanyaan_updated_at($pertanyaan_updated_at)
    {
        $this->pertanyaan_updated_at = $pertanyaan_updated_at;

        return $this;
    }

    /**
     * Get the value of pertanyaan_bab
     */ 
    public function getPertanyaan_bab()
    {
        return $this->pertanyaan_bab;
    }

    /**
     * Set the value of pertanyaan_bab
     *
     * @return  self
     */ 
    public function setPertanyaan_bab($pertanyaan_bab)
    {
        $this->pertanyaan_bab = $pertanyaan_bab;

        return $this;
    }

    /**
     * Get the value of pertanyaan_created_by
     */ 
    public function getPertanyaan_created_by()
    {
        return $this->pertanyaan_created_by;
    }

    /**
     * Set the value of pertanyaan_created_by
     *
     * @return  self
     */ 
    public function setPertanyaan_created_by($pertanyaan_created_by)
    {
        $this->pertanyaan_created_by = $pertanyaan_created_by;

        return $this;
    }
}
