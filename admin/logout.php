<?php
session_start();

/*
 * Nicole Bassen
 * nbassen.greenrivertech.net
 * This script destroys the current login session and redirects the
 * user to the login page
 */

session_destroy();
header('Location: login.php');
?>
