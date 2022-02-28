<?php
include('../koneksi.php');

$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

$query = "UPDATE kelas SET nama_kelas= '$nama_kelas', nama_kelas= '$nama_kelas' WHERE id_kelas = '$id_kelas'";

$result = mysqli_query($koneksi, $query);

mysqli_close($koneksi);

?>

<script type="text/javascript">
    window.location = "index.php";
</script>