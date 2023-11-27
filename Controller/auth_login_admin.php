<?php

include_once "helper.php";
include_once "../Model/koneksi.php";

$id_psi = $_POST['id_psi'];
$pass = md5($_POST['pass']);

$query = mysqli_query($koneksi, "SELECT * FROM admin_psi where id_psi = '$id_psi' AND password = '$pass'");

if (mysqli_num_rows($query) == 0) {
    header("location: " . BASE_URL . "admin.php?page=loginAdmin&notif=true");
} else {
    $row = mysqli_fetch_assoc($query);

    session_start();

    $_SESSION['id_psi'] = $row['id_psi'];
    $_SESSION['nama_admin'] = $row['nama_admin'];

    // header("location: ".BASE_URL."index.php?page=my_profile&module=user&action=list");
    header("location: " . BASE_URL . "admin.php?page=dashboard");
}
