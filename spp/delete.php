<?php
include('../koneksi.php');

$id_spp = $_GET['id_spp'];
$query = "DELETE FROM spp WHERE id_spp = '$id_spp'";

$result = mysqli_query($koneksi, $query);
?>

<script type="text/javascript">
    window.location = "index.php";
</script>