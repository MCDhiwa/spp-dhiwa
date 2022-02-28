<?php
include('../koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];

$query = "INSERT INTO petugas(id_petugas, username, password, nama_petugas, level) VALUES ('', '$username', '$password', '$nama_petugas', '$level')";

$result = mysqli_query($koneksi, $query);

mysqli_close($koneksi);

?>

<script type="text/javascript">
    window.location = "index.php";
</script>