<?php
     /**
     * NIM : 2257401024
     * NAMA : MUHAMAD ALDI
     * KELAS MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>