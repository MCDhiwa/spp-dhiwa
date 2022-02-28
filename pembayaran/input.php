<?php
require_once '../templates/header.php';
$readPetugas = "SELECT * FROM petugas";
$resultPetugas = mysqli_query($koneksi, $readPetugas);
$readdPetugas = readdata($resultPetugas);

$readSiswa = "SELECT * FROM siswa";
$resultSiswa = mysqli_query($koneksi, $readSiswa);
$readdSiswa = readdata($resultSiswa);

$readNisn = "SELECT * FROM siswa";
$resultNisn = mysqli_query($koneksi, $readNisn);
$readdNisn = readdata($resultNisn);

$readSpp = "SELECT * FROM spp";
$resultSpp = mysqli_query($koneksi, $readSpp);
$readdSpp = readdata($resultSpp);
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
    <h1 style="margin-bottom: -3px;">Input Pembayaran</h1>
    <span>Silahkan menginputkan data dengan benar!</span>
    <form action="proses_input.php" method="POST" class="in-container">
        <label>Id Pembayaran</label>
        <br>
        <input type="text" name="id_pembayaran" placeholder="id terisi otomatis" required="" readonly="" />
        <br>
        <label>Id Petugas</label>
        <br>
        <select name="id_petugas" id="">
            <?php foreach ($readdPetugas as $r) : ?>
                <option value="<?= $r['id_petugas'] ?>"><?= $r['id_petugas'] ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label>Nisn</label>
        <br>
        <select name="nisn" id="">
            <?php foreach ($readdNisn as $r) : ?>
                <option value="<?= $r['nisn'] ?>"><?= $r['nisn'] ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label>Tanggal Bayar</label>
        <br>
        <input type="text" name="tgl_dibayar" placeholder="masukan tanggal..." required="" />
        <br>
        <label>Bulan Bayar</label>
        <br>
        <input type="text" name="bulan_dibayar" placeholder="masukan nama bulan..." required="" />
        <br>
        <label>Tahun Bayar</label>
        <br>
        <input type="text" name="tahun_dibayar" placeholder="masukan tahun..." required="" />
        <br>
        <label>Angkatan</label>
        <br>
        <select name="nominal" id="">
            <?php foreach ($readdSpp as $r) : ?>
                <option value="<?= $r['nominal'] ?>"><?= $r['tahun'] ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label>Jumlah Bayar</label>
        <br>
        <input type="text" name="jumlah_dibayar" placeholder="masukan jumlah..." required="" />
        <br>
        <button type="submit"><b>SUBMIT</b></button>
    </form>
</div>
<?php
require_once '../templates/footer.php';
?>