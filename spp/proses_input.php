<?php

$id_spp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

include('../koneksi.php');
$query = "INSERT INTO spp(id_spp, tahun, nominal) VALUES ('$id_spp', '$tahun', '$nominal')";

$result = mysqli_query($koneksi, $query);

mysqli_close($koneksi);

?>

<script type="text/javascript">
    window.location = "index.php";
</script>