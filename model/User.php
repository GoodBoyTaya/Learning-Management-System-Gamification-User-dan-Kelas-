<?php

class User{

        private $user_id;
        private $user_role;
        private $user_email;
        private $user_nomor_induk;
        private $user_sekolah;
        private $user_fullname;
        private $user_address;
        private $user_mobilephone;
        private $user_profilepic;
        private $user_password;


        /**
         * Get the value of user_id
         */ 
        public function getUser_id()
        {
                return $this->user_id;
        }

        /**
         * Get the value of user_role
         */ 
        public function getUser_role()
        {
                return $this->user_role;
        }
        
        /**
         * Get the value of user_email
         */ 
        public function getUser_email()
        {
                return $this->user_email;
        }
        
        /**
         * Get the value of user_nomor_induk
         */ 
        public function getUser_nomor_induk()
        {
                return $this->user_nomor_induk;
        }
        
        /**
         * Get the value of user_sekolah
         */ 
        public function getUser_sekolah()
        {
                return $this->user_sekolah;
        }
        
        /**
         * Get the value of user_fullname
         */ 
        public function getUser_fullname()
        {
                return $this->user_fullname;
        }
        
        /**
         * Get the value of user_address
         */ 
        public function getUser_address()
        {
                return $this->user_address;
        }
        
        /**
         * Get the value of user_mobilephone
         */ 
        public function getUser_mobilephone()
        {
                return $this->user_mobilephone;
        }

        /**
         * Get the value of user_profilepic
         */ 
        public function getUser_profilepic()
        {
                return $this->user_profilepic;
        }

        /**
         * Set the value of user_id
         *
         * @return  self
         */ 
        public function setUser_id($user_id)
        {
                $this->user_id = $user_id;

                return $this;
        }

        /**
         * Set the value of user_role
         *
         * @return  self
         */ 
        public function setUser_role($user_role)
        {
                $this->user_role = $user_role;

                return $this;
        }

        /**
         * Set the value of user_email
         *
         * @return  self
         */ 
        public function setUser_email($user_email)
        {
                $this->user_email = $user_email;

                return $this;
        }

        /**
         * Set the value of user_nomor_induk
         *
         * @return  self
         */ 
        public function setUser_nomor_induk($user_nomor_induk)
        {
                $this->user_nomor_induk = $user_nomor_induk;

                return $this;
        }

        /**
         * Set the value of user_sekolah
         *
         * @return  self
         */ 
        public function setUser_sekolah($user_sekolah)
        {
                $this->user_sekolah = $user_sekolah;

                return $this;
        }

        /**
         * Set the value of user_fullname
         *
         * @return  self
         */ 
        public function setUser_fullname($user_fullname)
        {
                $this->user_fullname = $user_fullname;

                return $this;
        }


        /**
         * Set the value of user_address
         *
         * @return  self
         */ 
        public function setUser_address($user_address)
        {
                $this->user_address = $user_address;

                return $this;
        }

        /**
         * Set the value of user_mobilephone
         *
         * @return  self
         */ 
        public function setUser_mobilephone($user_mobilephone)
        {
                $this->user_mobilephone = $user_mobilephone;

                return $this;
        }

        /**
         * Set the value of user_profilepic
         *
         * @return  self
         */ 
        public function setUser_profilepic($user_profilepic)
        {
                $this->user_profilepic = $user_profilepic;

                return $this;
        }

        /**
         * Get the value of user_password
         */ 
        public function getUser_password()
        {
                return $this->user_password;
        }

        /**
         * Set the value of user_password
         *
         * @return  self
         */ 
        public function setUser_password($user_password)
        {
                $this->user_password = $user_password;

                return $this;
        }
}

?>