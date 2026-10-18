<?php 

    echo "Halaman baru";

    // var_dump($_GET);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Profil</title>
</head>
<body>
    <ul>
        <li>
            <img src="../img/<?= $_GET["gambar"] ?>" alt="" width="100" height="100">
        </li>
        <li>NIM : <?= $_GET["nim"] ?></li>
        <li>Nama : <?= $_GET["nama"] ?></li>
        <li>Jurusan : <?= $_GET["jurusan"] ?></li>
        <li>Email : <?= $_GET["email"] ?></li>
    </ul>
</body>
</html>