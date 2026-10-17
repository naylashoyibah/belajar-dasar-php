<?php 

    // Superglobals
    // Superglobals adalah variabel bawaan (built-in variables) di PHP 
    // yang dapat diakses dari mana saja dalam program PHP, baik di dalam fungsi (function), 
    // class, maupun di luar fungsi, tanpa harus mendeklarasikannya secara global.

    // superglobals merupakan variabel bawaan PHP yang merupakan Associative Array
    // untuk mengecek variabel superglobal, gunakan var_dump
    // contoh, var_dump($_GET);

    // $_GET	    Menampung data yang dikirim melalui metode GET (biasanya dari URL).
    // $_POST	    Menampung data yang dikirim melalui metode POST (biasanya dari form).
    // $_REQUEST	Menampung data dari GET, POST, atau COOKIE (gabungan dari ketiganya).
    // $_SESSION	Menyimpan data selama sesi pengguna masih aktif (berguna untuk login).
    // $_COOKIE	    Menyimpan data kecil di browser pengguna.
    // $_SERVER	    Menyimpan informasi tentang server dan lingkungan eksekusi PHP (seperti nama file, alamat IP, metode request, dll).
    // $_FILES	    Menyimpan data file yang diunggah melalui form upload.
    // $_ENV	    Menyimpan variabel lingkungan (environment variables).

    
    // METHOD GET

    // Array associative --> $_GET --> array associative nya masih kosong
    var_dump($_GET);
    echo "<hr>";

    // Cara mengisi array associative yang kosong ($_GET)

    // cara pertama
    // $_GET["nama"] = "Zamzam Aduhay";
    // $_GET["nim"] = "25001";
    // $_GET["alamat"] = "Purwakarta";

    // var_dump($_GET);
    // echo "<hr>";

    // cara kedua
    // bisa menggunakan URL 
    // http://localhost/materi_php/request_method_get.php?nama=Zamzam%20Aduhay&nim=25001&alamat=Purwakarta

    $mahasiswa = [
        [
            "nim" => "25001",
            "nama" => "Zamzam Aduhay",
            "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
            "email" => "zamzam@upi.edu",
            "gambar" => "zamzam.jpeg"
        ],
        [
            "nim" => "25002",
            "nama" => "Farel Astagfirullah",
            "jurusan" => "Sistem Telekomunikasi",
            "email" => "farel@yahoo.com",
            "gambar" => "farel.jpeg"
        ],
        [
            "nim" => "25003",
            "nama" => "Siti Lala Po",
            "jurusan" => "Mekatronika dan Kecerdasan Buatan",
            "email" => "lala@gmail",
            "gambar" => "lala.jpeg"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Method GET</title>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>

    <?php foreach($mahasiswa as $data): ?>
    <ul>
        <a href="detail/profil.php?nama=<?= $data["nama"] ?>&nim=<?= $data["nim"] ?>&email=<?= $data["email"] ?>&jurusan=<?= $data["jurusan"] ?>&gambar=<?= $data["gambar"] ?>">
            <?= $data["nama"] ?>
        </a>
    </ul>
    <?php endforeach ?>
    
</body>
</html>