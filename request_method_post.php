<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Method POST</title>
</head>
<body>
    <h3>Form Data Nama</h3>

    <form action="request_method_post_landing.php" method="POST">
        Masukkan namamu :
        <input type="text" name="nama_lengkap">
        <br>
        <br>
         Masukkan umurmu :
        <input type="number" name="umur">
        <br>
        <br>
        <button type="submit" name="tombol_kirim">Kirim Namamu</button>
    </form>
    
</body>
</html>