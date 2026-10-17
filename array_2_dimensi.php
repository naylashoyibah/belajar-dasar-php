<?php


    $mahasiswa = [
        ["Zamzam Aduhay", "25001", "Pendidikan Sistem dan Teknologi Informasi", "zamzam@upi.edu"],
        ["Farel Astagfirullah", "25002", "Sistem Telekomunikasi", "farel@yahoo.com"],
        ["Siti Lala Po", "25003", "Mekatronika dan Kecerdasan Buatan", "lala@gmail.com"]
    ];


    var_dump($mahasiswa);
    echo "<hr>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2 Dimensi</title>
    <style>
    table {
        border-collapse: collapse;
    }


    table, th, td {
        border: 1px solid black;
    }


    th, td {
        padding: 8px;
    }
</style>
</head>
<body>
    <h3>Array 2 Dimensi</h3>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach($mahasiswa as $data): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data[0] ?></td>
                <td><?php echo $data[1] ?></td>
                <td><?php echo $data[2] ?></td>
                <td><?php echo $data[3] ?></td>
            </tr>
            <?php $no++; ?>
            <?php endforeach ?>
        </tbody>
    </table>


</body>
</html>

