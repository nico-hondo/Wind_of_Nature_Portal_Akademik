<?php
if ($id_psi) {
    $page = isset($_GET['page']) ? $_GET['page'] : false;
} else {
    header("location: " . BASE_URL . "admin.php");
}
