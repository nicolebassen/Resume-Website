<?php
session_start();

/*
 * Nicole Bassen
 * nbassen.greenrivertech.net
 * This script redirects users to the login page if session is not active
 */

if(!isset($_SESSION['resume_sess']) && $_SERVER['REQUEST_URI'] != '/admin/login.php') {
    header('Location: http://nbassen.greenrivertech.net/admin/login.php');
}

 ?>
