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

$query = "UPDATE siswa SET nis= '$nis', password='$password', nama= '$nama', id_kelas= '$id_kelas', no_telp= '$no_telp', alamat= '$alamat',id_spp= '$id_spp' WHERE nisn = '$nisn'";

$result = mysqli_query($koneksi, $query);

mysqli_close($koneksi);

?>

<script type="text/javascript">
    window.location = "index.php";
</script>