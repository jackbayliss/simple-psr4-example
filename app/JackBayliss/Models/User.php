<?php namespace JackBayliss\Models;
Class User {
    private $ip;
    public function __construct(){
        session_start();
        $this->ip = $_SERVER['REMOTE_ADDR'];
        if(!isset($_SESSION['user'])){
           
            $this->CreateUser();
            
        }
      
       
    }
    public function CreateUser(){
        $_SESSION['user'] = md5(uniqid());
    }

}