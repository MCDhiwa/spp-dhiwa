<?php
include('../koneksi.php');

if (isset($_POST)) {
    $id_petugas = $_POST['id_petugas'];
    $nisn = $_POST['nisn'];
    $tgl_dibayar = $_POST['tgl_dibayar'];
    $bulan_dibayar = $_POST['bulan_dibayar'];
    $tahun_dibayar = $_POST['tahun_dibayar'];
    $id_spp = $_POST['nominal'];
    $jumlah_dibayar = $_POST['jumlah_dibayar'];

    $query = "INSERT INTO pembayaran VALUES ('', '$id_petugas', '$nisn', '$tgl_dibayar', '$bulan_dibayar', '$tahun_dibayar', '$id_spp', '$jumlah_dibayar')";
    $result = mysqli_query($koneksi, $query);

    return header('Location: ../history/index.php');
} else {
    return header('Location: input.php');
}

?>

<script type="text/javascript">
    window.location = "index.php";
</script>