<?php
 /**
     * NIM : 2257401024
     * NAMA : MUHAMAD ALDI
     * KELAS MI22A
     */ 
session_start();
if (!isset($_SESSION['tbl_user'])){
    $_SESSION['error'] = "Login Dahulu";
    header('location: login.php');
}

?>