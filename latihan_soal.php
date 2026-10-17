
<?php
echo "<h3>Daftar Buah (Indexed Array)</h3>";

$buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Anggur"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buah</title>
</head>
<body>

<ol>
    <?php foreach ($buah as $data): ?>
        <li><?php echo $data; ?></li>
    <?php endforeach; ?>
</ol>

<hr>

<h3>Nilai Promnet (Associative Array)</h3>
<?php

     $array_associative = [
        "Nsma" => "25001",
        "Nim" => "Zamzam Aduhay",
        "Nilai UTS" => "Pendidikan Sistem dan Teknologi Informasi",
        "Nilai UAS" => "zamzam@upi.edu",
    ];   

    $mahasiswa = [
        [
            "nim" => "25001",
            "nama" => "Zamzam Aduhay",
            "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
            "email" => "zamzam@upi.edu",
        ],
        [
            "nim" => "25002",
            "nama" => "Farel Astagfirullah",
            "jurusan" => "Sistem Telekomunikasi",
            "email" => "farel@yahoo.com",
        ],
        [
            "nim" => "25003",
            "nama" => "Siti Lala Po",
            "jurusan" => "Mekatronika dan Kecerdasan Buatan",
            "email" => "lala@gmail"
        ]
    ];
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        
        <?php foreach($mahasiswa as $data): ?>
            NIM <?= $data["nim"]; echo "<br>"; echo "<br>" ?>
            Nama <?= $data["nama"]; echo "<br>"; echo "<br>" ?>
            Jurusan <?= $data["jurusan"]; echo "<br>"; echo "<br>" ?>
            Email <?= $data["email"]; echo "<br>"; echo "<br>" ?>
        <hr>
        <?php endforeach ?>
    </body>
    </html>


</body>
</html>
