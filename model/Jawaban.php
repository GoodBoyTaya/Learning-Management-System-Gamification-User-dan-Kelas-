<?php
class Jawaban
{
    private $jawaban_id;
    private $jawaban_pertanyaan;
    private $jawaban_isi;
    private $jawaban_benar;
    private $jawaban_gambar;
    private $jawaban_created_at;


    /**
     * Get the value of jawaban_id
     */
    public function getJawaban_id()
    {
        return $this->jawaban_id;
    }

    /**
     * Set the value of jawaban_id
     *
     * @return  self
     */
    public function setJawaban_id($jawaban_id)
    {
        $this->jawaban_id = $jawaban_id;

        return $this;
    }

    /**
     * Get the value of jawaban_pertanyaan
     */ 
    public function getJawaban_pertanyaan()
    {
        return $this->jawaban_pertanyaan;
    }

    /**
     * Set the value of jawaban_pertanyaan
     *
     * @return  self
     */ 
    public function setJawaban_pertanyaan($jawaban_pertanyaan)
    {
        $this->jawaban_pertanyaan = $jawaban_pertanyaan;

        return $this;
    }

    /**
     * Get the value of jawaban_isi
     */ 
    public function getJawaban_isi()
    {
        return $this->jawaban_isi;
    }

    /**
     * Set the value of jawaban_isi
     *
     * @return  self
     */ 
    public function setJawaban_isi($jawaban_isi)
    {
        $this->jawaban_isi = $jawaban_isi;

        return $this;
    }

    /**
     * Get the value of jawaban_benar
     */ 
    public function getJawaban_benar()
    {
        return $this->jawaban_benar;
    }

    /**
     * Set the value of jawaban_benar
     *
     * @return  self
     */ 
    public function setJawaban_benar($jawaban_benar)
    {
        $this->jawaban_benar = $jawaban_benar;

        return $this;
    }

    /**
     * Get the value of jawaban_gambar
     */ 
    public function getJawaban_gambar()
    {
        return $this->jawaban_gambar;
    }

    /**
     * Set the value of jawaban_gambar
     *
     * @return  self
     */ 
    public function setJawaban_gambar($jawaban_gambar)
    {
        $this->jawaban_gambar = $jawaban_gambar;

        return $this;
    }

    /**
     * Get the value of jawaban_created_at
     */ 
    public function getJawaban_created_at()
    {
        return $this->jawaban_created_at;
    }

    /**
     * Set the value of jawaban_created_at
     *
     * @return  self
     */ 
    public function setJawaban_created_at($jawaban_created_at)
    {
        $this->jawaban_created_at = $jawaban_created_at;

        return $this;
    }

    /**
     * Get the value of jawaban_updated_at
     */ 
    public function getJawaban_updated_at()
    {
        return $this->jawaban_updated_at;
    }

    /**
     * Set the value of jawaban_updated_at
     *
     * @return  self
     */ 
    public function setJawaban_updated_at($jawaban_updated_at)
    {
        $this->jawaban_updated_at = $jawaban_updated_at;

        return $this;
    }
}
