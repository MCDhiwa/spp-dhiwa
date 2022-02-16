<?php
include('../koneksi.php');

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$id_spp = $_POST['id_spp'];

$query = "INSERT INTO siswa VALUES ('$nisn', '$nis', '$password', '$nama', '$id_kelas', '$no_telp', '$alamat', '$id_spp')";

$result = mysqli_query($koneksi, $query);

mysqli_close($koneksi);

?>

<script type="text/javascript">
    window.location = "index.php";
</script>