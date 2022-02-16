<?php
require_once '../templates/header.php';
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
        height: 80px;
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
</style>
<div class="container">
    <?php
    $nisn = $_GET['nisn'];

    $query = "SELECT FROM siswa WHERE nisn = $nisn";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
    ?>
    <h1 style="margin-bottom: -3px;">Input Siswa</h1>
    <span>Silahkan menginputkan data dengan benar!</span>
    <form action="proses_input.php" method="POST" class="in-container">
        <label>Nisn</label>
        <br>
        <input type="text" name="nisn" placeholder="masukan nisn..." value="<?php echo $data['nisn']; ?>" required="" />
        <br>
        <label>Nis</label>
        <br>
        <input type="text" name="nis" placeholder="masukan nis..." value="<?php echo $data['nis']; ?>" required="" />
        <br>
        <label>Nama</label>
        <br>
        <input type="text" name="nama" placeholder="masukan nama..." value="<?php echo $data['nama']; ?>" required="" />
        <br>
        <label>Kelas</label>
        <br>
        <input type="text" name="id_kelas" placeholder="masukan kelas..." value="<?php echo $data['id_kelas']; ?>" required="" />
        <br>
        <label>No Telp</label>
        <br>
        <input type="text" name="no_telp" placeholder="masukan no telp..." value="<?php echo $data['no_telp']; ?>" required="" />
        <br>
        <label>Alamat</label>
        <br>
        <textarea name="alamat" placeholder="masukan alamat..." value="<?php echo $data['alamat']; ?>" required=""></textarea>
        <br>
        <button type="submit"><b>SUBMIT</b></button>
    </form>
</div>
<?php
require_once '../templates/footer.php';
?>