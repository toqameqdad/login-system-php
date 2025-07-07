<?php
require_once 'authinterface.php';
require_once 'loggertrait.php';

class user implements authinterface{
    use loggertrait;
    private $username;
    private $password;
    private $image;

    public function __construct($u,$p,$img){
        $this->username=$u;
        $this->password=$p;
        $this->image=$img;
    }

    public function login($username,$password){
        if($username===$this->username && password_verify($password,$this->password)){
            $this->log("login success for $username");
            return true;
        }
        $this->log("login failed for $username");
        return false;

    }

    public function logout(){
        $this->log("user {$this->username} logged out");
    }

    public function getusername(){
        return $this->username;
    }

    public function getimage(){
        return $this->image;
    }
}
?>