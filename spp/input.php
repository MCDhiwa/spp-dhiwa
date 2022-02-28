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
    <h1 style="margin-bottom: -3px;">Input SPP</h1>
    <span>Silahkan menginputkan data dengan benar!</span>
    <form action="proses_input.php" method="POST" class="in-container">
        <label>Id SPP</label>
        <br>
        <input type="text" name="id_spp" placeholder="id terisi otomatis" required="" readonly="" />
        <br>
        <label>Tahun</label>
        <br>
        <input type="text" name="tahun" placeholder="masukan tahun..." required="" />
        <br>
        <label>Nominal</label>
        <br>
        <input type="text" name="nominal" placeholder="masukan nominal..." required="" />
        <br>
        <button type="submit"><b>SUBMIT</b></button>
    </form>
</div>
<?php
require_once '../templates/footer.php';
?>