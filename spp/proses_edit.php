<?php
include('../koneksi.php');

$id_spp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

$query = "UPDATE spp SET tahun= '$tahun', nominal= '$nominal' WHERE id_spp = '$id_spp'";

$result = mysqli_query($koneksi, $query);

mysqli_close($koneksi);

?>

<script type="text/javascript">
    window.location = "index.php";
</script>