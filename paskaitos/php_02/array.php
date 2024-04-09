<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paskaita 02</title>
</head>
<body>

    <h1><?php echo 'PHP Paskaita 02'; ?></h1>

    <p>Tomas</p>
    <p>Pavelas</p>
    <p>Kazimiras</p>

    <?php

        $susirinkusieji = ['Tomas', 'Dovilė', 'Pavelas', 'Donatas', 'Vytautas', 'Kazimiras'];
        // $masyvas = array();

        // Pridėti į masyvą naują reikšmę
        $susirinkusieji[] = 'Paulius';

        print_r($susirinkusieji);

        echo '<br>';

        echo $susirinkusieji[4];

    ?>
    
</body>
</html>