<?php
include('../koneksi.php');

$nisn = $_GET['nisn'];
$query = "DELETE FROM siswa WHERE nisn = '$nisn'";

$result = mysqli_query($koneksi, $query);
?>

<script type="text/javascript">
    window.location = "index.php";
</script>