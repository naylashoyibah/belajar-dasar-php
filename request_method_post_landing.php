<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Method GET</title>
</head>
<body>

    <?php var_dump($_POST); ?>
    <h1>Hallo, selamat datang. Namamu adalah <?= $_POST["nama_lengkap"] ?> dan umurmu adalah <?= $_POST["umur"] ?> tahun</h1>

</body>
</html>