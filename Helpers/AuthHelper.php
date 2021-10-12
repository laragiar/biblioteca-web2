<?php

class AuthHelper
{
    function __construct(){

    }  

    function checkLoggedIn(){
        session_start();
        if (!isset($_SESSION["email"])) {
            header("Location: " .BASE_URL."login");
        }
    }   
    function estalogueado(){
        if (isset ($SESSION["email"])){
            $log= true;
        } else {
            $log=false;
        } return $log;
    } 
        

}

