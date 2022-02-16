<?php
session_start();
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "db_spp";

$koneksi = mysqli_connect($servername, $username, $password, $database);
if (!$koneksi) {
    die("koneksi gagal: " . mysqli_connect_error());
}
echo "";
// read data
function readdata($result)
{
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
