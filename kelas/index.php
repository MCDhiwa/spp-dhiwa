<?php
require_once '../templates/header.php';
?>

<style>
    .anchor {
        text-decoration: none;
        color: #001e3c;
        display: inline-block;
    }

    table {
        width: 95%;
    }

    td {
        color: black;
        text-align: center;
    }

    .anchor:after {
        display: block;
        content: '';
        border-bottom: solid 3px #001e3c;
        transform: scaleX(0);
        transition: transform 250ms ease-in-out;
    }

    .anchor:hover:after {
        transform: scaleX(1);
    }

    a.anchor:after {
        transform-origin: 0% 50%;
    }
</style>
<div class="container">
    <h1>Kelas</h1>
    <a href="input.php" class="anchor">+ Tambah data kelas</a>
    <table>
        <tr>
            <td style="padding: 10px;">Id Kelas</td>
            <td>Nama Kelas</td>
            <td>Kompetensi Keahlian</td>
            <td>Aksi</td>
        </tr>

        <tbody>
            <?php
            // jalankan query untuk menampilkan semua data diurutkan berdasarkan idpelanggan
            $query = "SELECT * FROM kelas";
            $result = mysqli_query($koneksi, $query);
            //mengecek apakah ada error ketika menjalankan query
            if (!$result) {
                die("Query Error: " . mysqli_errno($koneksi) .
                    " - " . mysqli_error($koneksi));
            }

            //buat perulangan untuk element tabel dari data pelanggan
            //hasil query akan disimpan dalam variabel $data dalam bentuk array
            //kemudian dicetak dengan perulangan while
            while ($row = mysqli_fetch_assoc($result)) {
            ?>

                <tr>
                    <td><?php echo $row['id_kelas'] ?></td>
                    <td><?php echo $row['nama_kelas'] ?></td>
                    <td><?php echo $row['kompetensi_keahlian'] ?></td>
                    <td>
                        <a class="anchor" href="edit.php?id_kelas=<?= $row['id_kelas']; ?>">Edit </a>
                        <span>|</span>
                        <a class="anchor" href="delete.php?id_kelas=<?php echo $row['id_kelas']; ?>" oneclick="return confirm ('apakah anda yakin?')">Hapus</a>
                    </td>
                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>
</div>
<?php
require_once '../templates/footer.php';
?>