<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Form Input</h1>
    <form action="welcome.php" method="post">
        Nama: <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <?php
    // welcome.php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        echo "Selamat Datang " . $nama;
    }
    ?>
</body>
</html>
