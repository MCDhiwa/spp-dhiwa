<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['username'])) {
    header('location:../index.php');
    exit();
}
?>

<html>

<head>
    <title>Form Login</title>
    <style type="text/css">
        body {
            font-family: arial;
            background-color: #001e3c;
        }

        h1 {
            margin-top: 2%;
            text-align: center;
        }

        form {
            width: 60%;
            text-align: center;
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

        label {
            margin-top: 5px;
            margin-bottom: 5px;
            float: left;
            text-align: left;
            width: 100%;
        }

        input {
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            background: #f8f8f8;
            border: 2px solid #ccc;
            outline-color: #001e3c;
        }

        div {
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
            margin-top: 5%;
            padding: 50px;
            width: 40vw;
            height: 60vh;
            border-radius: 25px;
            background-color: white;
            display: flex;
            justify-content: center;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div>
        <form action="proses_login.php" method="POST">
            <h1><img src="https://elearning.smkti-baliglobal.sch.id/img/logo-ti2.png" width="200px" height="200px" alt=""></h1>
            <label>Username</label>
            <input type="text" name="username" placeholder="masukan username" required="" autofocus="">
            <label>Password</label>
            <input type="password" name="password" placeholder="masukan password" required="">
            <button type="submit" name="masuk"><b>SUBMIT</b></button>
        </form>
    </div>

    <?php if (isset($_GET['pesan'])) { ?>
        <div class="error">
            <label>Oopps... <?php echo $_GET['pesan']; ?></label>
        </div>
    <?php } ?>


</body>

</html>