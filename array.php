
<?php


    // array
   
    // cara lama (cara 1)
    $hari = array("Senin", "Selasa", "Rabu");


    // cara baru (cara 2)
    $bulan = ["Januari", "Februari", "Maret"];
    $kelompok1 = [
        "Zamzam Wow",
        "Farel Hamdalah",
        "Siti Lala"
    ];


    // menampilkan array


    // cara pertama
    var_dump($bulan);
    echo "<hr>";


    // cara kedua
    print_r($bulan);
    echo "<hr>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
            .kotak {
                width: 50px;
                height: 50px;
                background-color: salmon;
                text-align: center;
                line-height: 50px;
                margin: 3px;
                float: left;
            }
            .clear { clear: both; }
        </style>
</head>
<body>
    <?php $array_angka = [3,5,7,9,11,13,15,17]; ?>


    <!-- Perulangan Array memakai for -->
    <?php for($i=0; $i<count($array_angka); $i++){ ?>
        <div class="kotak"><?php echo $array_angka[$i] ?></div>
        <?php } ?>


    <div class="clear"></div>


    <!-- Perulangan array memakai foreach -->
    <?php foreach($array_angka as $data): ?>
    <div class="kotak"><?php echo $data ?></div>
    <?php endforeach ?>


</body>
</html>
