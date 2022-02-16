<?php
include('../koneksi.php');

$id_kelas = $_GET['id_kelas'];
$query = "DELETE FROM kelas WHERE id_kelas = '$id_kelas'";

$result = mysqli_query($koneksi, $query);
?>

<script type="text/javascript">
    window.location = "index.php";
</script>