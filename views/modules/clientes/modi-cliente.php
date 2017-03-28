<?php 
if (!isset($_SESSION)) { session_start(); } 
if(!$_SESSION["validar"]){  
    echo "<script>"
        . "window.location.replace(\"http://10.224.24.247/parque/\");"
        . "</script>";
    exit();
}