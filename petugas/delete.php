<?php
include('../koneksi.php');

$id_petugas = $_GET['id_petugas'];
$query = "DELETE FROM petugas WHERE id_petugas = '$id_petugas'";

$result = mysqli_query($koneksi, $query);
?>

<script type="text/javascript">
    window.location = "index.php";
</script>