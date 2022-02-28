<?php
require_once '../templates/header.php';
$query = "SELECT * FROM kelas";
$result = mysqli_query($koneksi, $query);
$read = readdata($result);
$readSiswa = "SELECT * FROM spp";
$resultSiswa = mysqli_query($koneksi, $readSiswa);
$readd = readdata($resultSiswa);
?>
<style>
    .in-container {
        margin-top: 20px;
    }

    input {
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        background: #f8f8f8;
        border: 2px solid #ccc;
        outline-color: #001e3c;
        box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.1);
        width: 80%;
        margin-top: 5px;
        margin-bottom: 10px;
    }

    textarea {
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        background: #f8f8f8;
        border: 2px solid #ccc;
        outline-color: #001e3c;
        box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.1);
        width: 80%;
        margin-bottom: 10px;
    }

    button {
        color: white;
        background-color: #001e3c;
        padding: 10px;
        border-radius: 10px;
        text-decoration: none;
        font-size: 12px;
        border: 0;
        margin-top: 20px;
    }

    select {
        width: 80%;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        background: #f8f8f8;
        border: 2px solid #ccc;
        outline-color: #001e3c;
        box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.1);
        width: 80%;
        margin-top: 5px;
        margin-bottom: 10px;
    }
</style>
<div class="container">
    <?php
    $id_kelas = $_GET['id_kelas'];

    $query = "SELECT * FROM kelas WHERE id_kelas = $id_kelas";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
    ?>
    <h1 style="margin-bottom: -3px;">Edit SPP</h1>
    <span>Silahkan menginputkan data ulang dengan benar!</span>
    <form action="proses_edit.php" method="POST" class="in-container">
        <label>Id Kelas</label>
        <br>
        <input type="text" name="id_kelas" value="<?php echo $data['id_kelas']; ?>" required="" />
        <br>
        <label>Nama Kelas</label>
        <br>
        <input type="text" name="nama_kelas" value="<?php echo $data['nama_kelas']; ?>" required="" />
        <br>
        <label>Kompetensi Keahlian</label>
        <br>
        <input type="text" name="kompetensi_keahlian" value="<?php echo $data['kompetensi_keahlian']; ?>" required="" />
        <br>
        <button type="submit"><b>SUBMIT</b></button>
    </form>
</div>
<?php
require_once '../templates/footer.php';
?>