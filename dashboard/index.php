<?php
require_once '../templates/header.php';
?>
<!-- content -->

<div class="col-div-3">
    <div class="box">
        <p><?= mysqli_num_rows($kelas) ?><br /><span>Kelas</span></p>
        <i class="fa fa-users box-icon"></i>
    </div>
</div>
<div class="col-div-3">
    <div class="box">
        <p><?= mysqli_num_rows($petugas) ?><br /><span>Petugas</span></p>
        <i class="fa fa-list box-icon"></i>
    </div>
</div>
<div class="col-div-3">
    <div class="box">
        <p><?= mysqli_num_rows($siswa) ?><br /><span>Siswa</span></p>
        <i class="fa fa-tasks box-icon"></i>
    </div>
</div>
<div class="col-div-3">
    <div class="box">
        <p>0<br /><span>History</span></p>
        <i class="fa fa-list-alt box-icon"></i>
    </div>
</div>

<!-- end content -->
<?php
require_once '../templates/footer.php';
?>