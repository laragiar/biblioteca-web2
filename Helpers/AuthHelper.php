<?php

class AuthHelper{
    
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
 
}

