<?php

if ($page === "dashboard") {
    $call = "./Admin/homeAdmin";
} elseif ($page === "datamahasiswa") {
    $call = "./View/data_mhs";
} elseif ($page === "loginAdmin") {
    $call = "./Admin/loginAdmin";
} elseif ($page === false) {
    $call = "./Admin/loginAdmin";
}
