<?php

class UserDaoImpl{


    public function setOTP(User $user , $otp)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'email' => $user->getUser_email(),
            'otp' => $otp,
        );
        $result = $conn->execute_sp('spSetOTP',$data);
        $conn = null;
        return $result;
    }

    public function LoginOTP($email,$otp)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'email' => $email,
            'otp' => $otp,
        );
        $result = $conn->execute_sp('spLoginOTP',$data);
        $conn = null;
        return $result;
    }

    public function getUserData($user,$sekolah,$rol){
        $result = 0;
        $conn = new Database();
        $data = array(
            'id' => $user,
            'idsekolah' => $sekolah,
            'userrole' => $rol
        );
        $result = $conn->execute_sp('spGetUser',$data);
        $conn = null;
        return $result;
    }

    public function AddSiswa(User $user){
       
        $result = 0;
        $conn = new Database();
        $data = array(
            'id' => $user->getUser_id(),
            'role' => $user->getUser_role(),
            'email' => $user->getUser_email(),
            'nomor_induk' => $user->getUser_nomor_induk(),
            'sekolah' => $user->getUser_sekolah(),
            'fullname' => $user->getUser_fullname(),
            'address' => $user->getUser_address(),
            'mobilephone' => $user->getUser_mobilephone(),
            'profilepic' => $user->getUser_profilepic()
        );
        $result = $conn->execute_sp('spSetUser',$data);
        $conn = null;
        return $result;

    }

    public function AddGuru(User $user)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'id' => $user->getUser_id(),
            'role' => $user->getUser_role(),
            'email' => $user->getUser_email(),
            'nomor_induk' => $user->getUser_nomor_induk(),
            'sekolah' => $user->getUser_sekolah(),
            'fullname' => $user->getUser_fullname(),
            'address' => $user->getUser_address(),
            'mobilephone' => $user->getUser_mobilephone(),
            'profilepic' => $user->getUser_profilepic()
        );
        $result = $conn->execute_sp('spSetUser',$data);
        $conn = null;
        return $result;
    }

    public function getuserByEmail(User $user)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'email' => $user->getUser_email()
        );
        $result = $conn->execute_sp('spGetUserByEmail',$data);
        $conn = null;
        return $result;
    }

    public function changepass($email,$pass)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'email' => $email,
            'pass' => $pass
        );
        $result = $conn->execute_sp('spSetPassword',$data);
        $conn = null;
        return $result;
    }

    public function Login(User $user)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'email' => $user->getUser_email(),
            'password' => $user->getUser_password(),
        );
        $result = $conn->execute_sp('spLogin',$data);
        $conn = null;
        return $result;
    }

    public function Loginsu(User $user)
    {
        $result = 0;
        $conn = new Database();
        $data = array(
            'email' => $user->getUser_email(),
            'password' => $user->getUser_password(),
        );
        $result = $conn->execute_sp('spLoginsu',$data);
        $conn = null;
        return $result;
    }

    public function delsiswa(User $user){
       
        $result = 0;
        $conn = new Database();
        $data = array(
            'id' => $user->getUser_id(),
        );
        $result = $conn->execute_sp('spDelSiswa',$data);
        $conn = null;
        return $result;

    }
    public function delguru(User $user){
       
        $result = 0;
        $conn = new Database();
        $data = array(
            'id' => $user->getUser_id(),
        );
        $result = $conn->execute_sp('spDelGuru',$data);
        $conn = null;
        return $result;

    }
    public function deladmin(User $user){
       
        $result = 0;
        $conn = new Database();
        $data = array(
            'id' => $user->getUser_id(),
        );
        $result = $conn->execute_sp('spDelAdmin',$data);
        $conn = null;
        return $result;

    }
}

?>