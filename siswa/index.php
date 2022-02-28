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
</style>
<div class="container">
    <h1>Siswa</h1>
    <a href="input.php" class="anchor">+ Tambah data siswa</a>
    <table>
        <tr>
            <td style="padding: 10px;">Nisn</td>
            <td>Nis</td>
            <td>Password</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>No Telp</td>
            <td>Alamat</td>
            <td>Nominal</td>
            <td>Aksi</td>
        </tr>

        <tbody>
            <?php
            // jalankan query untuk menampilkan semua data diurutkan berdasarkan id_kelas
            $query = "SELECT * FROM siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas JOIN spp ON siswa.id_spp = spp.id_spp";
            $result = mysqli_query($koneksi, $query);
            //mengecek apakah ada error ketika menjalankan query
            if (!$result) {
                die("Query Error: " . mysqli_errno($koneksi) .
                    " - " . mysqli_error($koneksi));
            }

            //buat perulangan untuk element tabel dari data siswa
            //hasil query akan disimpan dalam variabel $data dalam bentuk array
            //kemudian dicetak dengan perulangan while
            while ($row = mysqli_fetch_assoc($result)) {
            ?>

                <tr>
                    <td><?php echo $row['nisn'] ?></td>
                    <td><?php echo $row['nis'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['nama_kelas'] ?></td>
                    <td><?php echo $row['no_telp'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                    <td><?php echo $row['nominal'] ?></td>
                    <td>
                        <a class="anchor" href="edit.php?nisn=<?= $row['nisn']; ?>">Edit </a>
                        <span>|</span>
                        <a class="anchor" href="delete.php?nisn=<?php echo $row['nisn']; ?>" onclick="return confirm ('apakah anda yakin?')">Hapus</a>
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