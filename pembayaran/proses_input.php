<?php
include('../koneksi.php');

$id_pembayaran = $_POST['id_pembayaran'];
$id_petugas = $_POST['id_petugas'];
$nisn = $_POST['nisn'];
$tgl_dibayar = $_POST['tgl_dibayar'];
$bulan_dibayar = $_POST['bulan_dibayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$id_spp = $_POST['nominal'];
$jumlah_dibayar = $_POST['jumlah_dibayar'];

$query = "INSERT INTO siswa(id_pembayaran, id_petugas, nisn, tgl_dibayar, bulan_dibayar, tahun_dibayar, nominal, jumlah_dibayar) VALUES ('$id_pembayaran', '$id_petugas', '$nisn', '$tgl_dibayar', '$bulan_dibayar', '$tahun_dibayar', '$id_spp', '$jumlah_dibayar')";

$result = mysqli_query($koneksi, $query);

mysqli_close($koneksi);

?>

<script type="text/javascript">
    window.location = "index.php";
</script>