<?php

class AuthHelper
{
    function __construct(){
         // abre la sessión siempre para usar el helper
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }

    }  

    function checkLoggedIn(){
        if (!isset($_SESSION['email'])) {
            header("Location: " .BASE_URL."login");
        }
    } 

    function logAdmin(){
        if (isset ($SESSION['email'])){
            $admin= $SESSION['email'];
            return $admin;
        } else {
            $admin='';
            return $admin;
        } 
        
      
    } 
 
}

