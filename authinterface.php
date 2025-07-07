<?php 
interface authinterface{
    public function login($username,$password);
    public function logout();
}
?>