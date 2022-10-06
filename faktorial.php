<html>

<head>
    <title>Menghitung Bilangan Faktorial</title>
    <style>
    </style>
</head>

<body>

    <body>
        <?php
        $y = isset($_POST['y']) ? $_POST['y'] : NULL;
        if (isset($_POST['hitung'])) {
            if ($y != NULL) {
                $bil = 1;
                for ($i = 1; $i <= $y; $i++) {
                    $bil = $bil * $i;
                }
            } else {
                $bil = 'Bilangan Tidak boleh kosong !';
            }
        }
        echo '<div class="panel">';
        echo '<h2>Menghitung Bilangan Faktorial</h2>';
        echo '<h4>Masukkan Bilangan :</h4>';
        echo '<form action="" method="post">';
        echo '<input class="field" type="text" name="y" value="' . $y . '" placeholder="Masukkan Bilangan..."/>';
        echo '<input class="tombol" type="submit" name="hitung" value="Hitung"/>';
        echo '</form>';
        echo '<h4>Jumlah Faktorial :</h4>';
        echo '<input class="field" type="text" value="' . (isset($bil) ? $bil : NULL) . '" readonly/>';
        echo '</div>';
        ?>
    </body>

</html>