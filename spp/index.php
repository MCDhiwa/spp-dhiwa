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
    <a href="input.php" class="anchor">+ Tambah data SPP</a>
    <table>
        <tr>
            <td style="padding: 10px;">Id SPP</td>
            <td>Tahun</td>
            <td>Nominal</td>
            <td>Aksi</td>
        </tr>

        <tbody>
            <?php
            // jalankan query untuk menampilkan semua data diurutkan berdasarkan idpelanggan
            $query = "SELECT * FROM spp";
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
                    <td><?php echo $row['id_spp'] ?></td>
                    <td><?php echo $row['tahun'] ?></td>
                    <td><?php echo $row['nominal'] ?></td>
                    <td>
                        <a class="anchor" href="edit.php?id_spp=<?= $row['id_spp']; ?>">Edit </a>
                        <span>|</span>
                        <a class="anchor" href="delete.php?id_spp=<?php echo $row['id_spp']; ?>" oneclick="return confirm ('apakah anda yakin?')">Hapus</a>
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