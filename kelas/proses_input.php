<?php

$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

include('../koneksi.php');
$query = "INSERT INTO kelas(id_kelas, nama_kelas, kompetensi_keahlian) VALUES ('$id_kelas', '$nama_kelas', '$kompetensi_keahlian')";

$result = mysqli_query($koneksi, $query);

mysqli_close($koneksi);

?>

<script type="text/javascript">
    window.location = "index.php";
</script>