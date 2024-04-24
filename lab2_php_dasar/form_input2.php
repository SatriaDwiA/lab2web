<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Profil</title>
</head>
<body>
    <h1>Form Profil</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        Nama: <input type="text" name="nama" required><br>
        Tanggal Lahir: <input type="date" name="tanggal_lahir" required><br>
        Pekerjaan:
        <select name="pekerjaan" required>
            <option value="Guru">Guru</option>
            <option value="Dokter">Dokter</option>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
        </select><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
        $pekerjaan = $_POST['pekerjaan'];

        // Menghitung umur
        $sekarang = new DateTime();
        $umur = $sekarang->diff($tanggal_lahir)->y;

        // Menentukan gaji berdasarkan pekerjaan
        $gaji = 0;
        switch ($pekerjaan) {
            case 'Guru':
                $gaji = 5000000;
                break;
            case 'Dokter':
                $gaji = 15000000;
                break;
            case 'Programmer':
                $gaji = 10000000;
                break;
            case 'Desainer':
                $gaji = 7000000;
                break;
        }

        echo "<h2>Profil Anda:</h2>";
        echo "Nama: " . $nama . "<br>";
        echo "Umur: " . $umur . " tahun<br>";
        echo "Pekerjaan: " . $pekerjaan . "<br>";
        echo "Gaji: Rp. " . number_format($gaji, 2, ',', '.') . "<br>";
    }
    ?>
</body>
</html>
