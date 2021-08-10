<?php
session_start();
unset($_SESSION['usuario']);
header("location:http://localhost:8081/form_login.html");
?>