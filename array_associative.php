<?php


    // ini adalah indexed array
    $array_indexed = ["Zahra", "Altari", "Aditya", "Fahmi", "Mohammed","Farel"];




    // ini adalah array 2 dimensi
    $array_2_dimensi = [
        ["Zamzam Aduhay", "25001", "Pendidikan Sistem dan Teknologi Informasi", "zamzam@upi.edu"],
        ["Farel Astagfirullah", "25002", "Sistem Telekomunikasi", "farel@yahoo.com"],
        ["Siti Lala Po", "25003", "Mekatronika dan Kecerdasan Buatan", "lala@gmail.com"]
    ];




    // ini adalah array associative
    $array_associative = [
        "nim" => "25001",
        "nama" => "Zamzam Aduhay",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "zamzam@upi.edu",
        "gambar" => "zamzam.jpeg"
    ];


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
        <title>Array Associative</title>
    </head>
    <body>
       
        <h3>Daftar Mahasiswa</h3>


        <?php foreach($mahasiswa as $data): ?>
        <ul>
            <li>
                <img src="img/<?= $data["gambar"] ?>"alt="" width="100" height="100"></li>
            <li>NIM : <?= $data["nim"] ?></li>
            <li>Nama : <?= $data["nama"] ?></li>
            <li>Jurusan : <?= $data["jurusan"] ?></li>
            <li>Email : <?= $data["email"] ?></li>
        </ul>
        <?php endforeach ?>
    </body>
    </html>
