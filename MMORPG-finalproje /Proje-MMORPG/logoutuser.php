<?php
session_start();

session_destroy();
header("Location: internetwebsite.html"); // Redirecting To Home Page
?>