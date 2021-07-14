<?php

class Anggota
{
    
        private $anggota_id;
        private $anggota_kelas;
        private $anggota_user;
    

        /**
         * Get the value of anggota_user
         */ 
        public function getAnggota_user()
        {
                return $this->anggota_user;
        }

        /**
         * Set the value of anggota_user
         *
         * @return  self
         */ 
        public function setAnggota_user($anggota_user)
        {
                $this->anggota_user = $anggota_user;

                return $this;
        }

        /**
         * Get the value of anggota_kelas
         */ 
        public function getAnggota_kelas()
        {
                return $this->anggota_kelas;
        }

        /**
         * Set the value of anggota_kelas
         *
         * @return  self
         */ 
        public function setAnggota_kelas($anggota_kelas)
        {
                $this->anggota_kelas = $anggota_kelas;

                return $this;
        }

        /**
         * Get the value of anggota_id
         */ 
        public function getAnggota_id()
        {
                return $this->anggota_id;
        }

        /**
         * Set the value of anggota_id
         *
         * @return  self
         */ 
        public function setAnggota_id($anggota_id)
        {
                $this->anggota_id = $anggota_id;

                return $this;
        }
}


?>