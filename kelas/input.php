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
    <h1 style="margin-bottom: -3px;">Input Kelas</h1>
    <span>Silahkan menginputkan data dengan benar!</span>
    <form action="proses_input.php" method="POST" class="in-container">
        <label>Id Kelas</label>
        <br>
        <input type="text" name="id_kelas" placeholder="masukan id..." required="" />
        <br>
        <label>Nama Kelas</label>
        <br>
        <input type="text" name="nama_kelas" placeholder="masukan nama kelas..." required="" />
        <br>
        <label>Kompetensi Keahlian</label>
        <br>
        <input type="text" name="kompetensi_keahlian" placeholder="masukan kompetensi keahlian..." required="" />
        <br>
        <button type="submit"><b>SUBMIT</b></button>
    </form>
</div>
<?php
require_once '../templates/footer.php';
?>