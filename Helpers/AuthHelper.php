<?php

class AuthHelper
{
    function __construct(){

    }  

    function checkLoggedIn(){
        session_start();
        if (!isset($_SESSION['email'])) {
            header("Location: " .BASE_URL."login");
        }
    } 

    function logAdmin(){
        if (session_status() !=PHP_SESSION_ACTIVE){
        session_start();
        if (isset ($SESSION['email'])){
            $admin= $SESSION['email'];
            return $admin;
        } else {
            $admin='';
            return $admin;
        } 
        
      }
    } 
   /* function login($userEmail) {
        session_start();
        $_SESSION['email'] = $userEmail->email;
        header("Location: " . BASE_URL . "home");
    } */
}

