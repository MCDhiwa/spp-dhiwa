<?php
require_once '../templates/header.php';
?>

<style>
    .anchor {
        text-decoration: none;
        color: #001e3c;
        display: inline-block;
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

    button .cetak {
        padding: 10px;
        background-color: green;
        color: white;

    }
</style>
<div class="container">
    <h1>Pembayaran</h1>
    <a href="input.php" class="anchor">+ Tambah data Pembayaran</a>
    <table>
        <tr>
            <td style="padding: 10px;">Id Pembayaran</td>
            <td>Id Petugas</td>
            <td>Nisn</td>
            <td>Tanggal Bayar</td>
            <td>Bulan Bayar</td>
            <td>Tahun Bayar</td>
            <td>Id SPP</td>
            <td>Jumlah Bayar</td>
            <td>Aksi</td>
        </tr>

        <tbody>
            <?php
            // jalankan query untuk menampilkan semua data diurutkan berdasarkan id_pembayaran
            $query = "SELECT * FROM pembayaran JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas JOIN spp ON pembayaran.id_spp = spp.id_spp JOIN siswa ON pembayaran.nisn = siswa.nisn";
            $result = mysqli_query($koneksi, $query);
            $i = 1;
            //mengecek apakah ada error ketika menjalankan query
            if (!$result) {
                die("Query Error: " . mysqli_errno($koneksi) .
                    " - " . mysqli_error($koneksi));
            }

            //buat perulangan untuk element tabel dari data pembayaran
            //hasil query akan disimpan dalam variabel $data dalam bentuk array
            //kemudian dicetak dengan perulangan while
            while ($row = mysqli_fetch_assoc($result)) {
            ?>

                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $row['nama_petugas'] ?></td>
                    <td><?php echo $row['nisn'] ?></td>
                    <td><?php echo $row['tgl_bayar'] ?></td>
                    <td><?php echo $row['bulan_dibayar'] ?></td>
                    <td><?php echo $row['tahun_dibayar'] ?></td>
                    <td><?php echo $row['nominal'] ?></td>
                    <td><?php echo $row['jumlah_dibayar'] ?></td>
                    <td>
                        <a class="anchor" href="edit.php?id_pembayaran=<?= $row['id_pembayaran']; ?>">Edit </a>
                        <span>|</span>
                        <a class="anchor" href="delete.php?id_pembayaran=<?php echo $row['id_pembayaran']; ?>" onclick="return confirm ('apakah anda yakin?')">Hapus</a>
                    </td>
                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>
    <button class="cetak">Cetak</button>
</div>

<?php
require_once '../templates/footer.php';
?>