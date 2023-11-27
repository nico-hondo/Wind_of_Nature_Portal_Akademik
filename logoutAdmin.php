<?php
include_once "helper.php";

session_start();

unset($_SESSION['id_psi']);
unset($_SESSION['nama_admin']);

header("location: admin.php");
