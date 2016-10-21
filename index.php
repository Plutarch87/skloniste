<?php 
session_start();
isset($_SESSION['email']) ? require 'views/admin.index.php' : header('Location: views/auth/admin.login.php');