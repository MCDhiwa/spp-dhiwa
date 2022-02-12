<?php
include('../koneksi.php');
$kelas = mysqli_query($koneksi, "SELECT * FROM kelas");
$pembayaran = mysqli_query($koneksi, "SELECT * FROM pembayaran");
$petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
$siswa = mysqli_query($koneksi, "SELECT * FROM siswa");
$spp = mysqli_query($koneksi, "SELECT * FROM spp");
?>

<html>

<head>
    <title></title>
    <link rel="stylesheet" href="../templates/css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div id="mySidenav" class="sidenav">
        <p class="logo"><img src="https://elearning.smkti-baliglobal.sch.id/img/logo-ti2.png" width="130px" height="130px" alt=""></p>
        <a href="../dashboard/index.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a href="#" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Kelas</a>
        <a href="#" class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Pembayaran</a>
        <a href="#" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Petugas</a>
        <a href="../siswa/index.php" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Siswa</a>
        <a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;History</a>
        <a href="../logout.php" class="icon-a"><i class="fa fa-sign-out icons"></i> &nbsp;&nbsp;Logout</a>
    </div>
    <div id="main">
        <div class="head">
            <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Dashboard</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Dashboard</span>
            </div>

            <div class="col-div-6">
                <div class="profile">
                    <p><?= $_SESSION['userlogin'] ?><span>UI / UX DESIGNER</span></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
        <br />