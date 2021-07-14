<?php

class Sekolah
{ 
   private $sekolah_id;
   private $sekolah_npsn;
   private $sekolah_name;
   private $sekolah_address;
   private $sekolah_email;
   private $sekolah_phone;
   private $sekolah_status;
   private $sekolah_logo;
   private $sekolah_jenjang;


   /**
    * Get the value of sekolah_id
    */ 
   public function getSekolah_id()
   {
      return $this->sekolah_id;
   }

   /**
    * Set the value of sekolah_id
    *
    * @return  self
    */ 
   public function setSekolah_id($sekolah_id)
   {
      $this->sekolah_id = $sekolah_id;

      return $this;
   }

   /**
    * Get the value of sekolah_npsn
    */ 
   public function getSekolah_npsn()
   {
      return $this->sekolah_npsn;
   }

   /**
    * Set the value of sekolah_npsn
    *
    * @return  self
    */ 
   public function setSekolah_npsn($sekolah_npsn)
   {
      $this->sekolah_npsn = $sekolah_npsn;

      return $this;
   }

   /**
    * Get the value of sekolah_name
    */ 
   public function getSekolah_name()
   {
      return $this->sekolah_name;
   }

   /**
    * Set the value of sekolah_name
    *
    * @return  self
    */ 
   public function setSekolah_name($sekolah_name)
   {
      $this->sekolah_name = $sekolah_name;

      return $this;
   }

   /**
    * Get the value of sekolah_address
    */ 
   public function getSekolah_address()
   {
      return $this->sekolah_address;
   }

   /**
    * Set the value of sekolah_address
    *
    * @return  self
    */ 
   public function setSekolah_address($sekolah_address)
   {
      $this->sekolah_address = $sekolah_address;

      return $this;
   }

   /**
    * Get the value of sekolah_email
    */ 
   public function getSekolah_email()
   {
      return $this->sekolah_email;
   }

   /**
    * Set the value of sekolah_email
    *
    * @return  self
    */ 
   public function setSekolah_email($sekolah_email)
   {
      $this->sekolah_email = $sekolah_email;

      return $this;
   }

   /**
    * Get the value of sekolah_phone
    */ 
   public function getSekolah_phone()
   {
      return $this->sekolah_phone;
   }

   /**
    * Set the value of sekolah_phone
    *
    * @return  self
    */ 
   public function setSekolah_phone($sekolah_phone)
   {
      $this->sekolah_phone = $sekolah_phone;

      return $this;
   }

   /**
    * Get the value of sekolah_status
    */ 
   public function getSekolah_status()
   {
      return $this->sekolah_status;
   }

   /**
    * Set the value of sekolah_status
    *
    * @return  self
    */ 
   public function setSekolah_status($sekolah_status)
   {
      $this->sekolah_status = $sekolah_status;

      return $this;
   }

   /**
    * Get the value of sekolah_logo
    */ 
   public function getSekolah_logo()
   {
      return $this->sekolah_logo;
   }

   /**
    * Set the value of sekolah_logo
    *
    * @return  self
    */ 
   public function setSekolah_logo($sekolah_logo)
   {
      $this->sekolah_logo = $sekolah_logo;

      return $this;
   }

   /**
    * Get the value of sekolah_jenjang
    */ 
   public function getSekolah_jenjang()
   {
      return $this->sekolah_jenjang;
   }

   /**
    * Set the value of sekolah_jenjang
    *
    * @return  self
    */ 
   public function setSekolah_jenjang($sekolah_jenjang)
   {
      $this->sekolah_jenjang = $sekolah_jenjang;

      return $this;
   }
}
