<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paskaita 02</title>

    <style>
        table, tr, td {
            border: 1px black solid;
        }
    </style>
</head>
<body>

    <h1><?php echo 'PHP Paskaita 02 - Ciklai' ?></h1>

    <?php

        // For ciklo pavyzdys

        echo 'FOR ciklas <br>';

        for ($i = 0; $i <= 10; $i++) {

            $rezultatas = $i * 7;
            echo "$i kart 7 lygų $rezultatas.<br>";

        }


        echo 'WHILE ciklas <br>';

        $j = 0;

        while ($j <= 10) {
            $rezultatas = $j * 7;
            echo "$j kart 7 lygų $rezultatas.<br>";

            $j++;
        }



        echo 'DO WHILE ciklas <br>';

        $k = 100;

        do {
            $rezultatas = $k * 7;
            echo "$k kart 7 lygų $rezultatas.<br>";

            $k++;
        } while ($k <= 10);



        $komandos = [
            'Žalgiris',
            'Lietuvoas Rytas',
            'Neptūnas',
            'Lietkabelis',
            'Wolves',
            'Šiauliai',
            'Nauja Komanda',
        ];
    ?>

    <ul>
        <?php
            for ($i = 0; $i < count($komandos); $i++) {
                echo "<li>$komandos[$i]</li>";
            }
        ?>
    </ul>

    
    <table>
      

        <?php
            for ($x = 10; $x <= 20; $x++) {
                echo '<tr>';
                
                for ($y = 10; $y <= 20; $y++) {
                    echo '<td>';
                    echo $y . ' * ' . $x . ' = ' . ($y * $x);
                    // $rezultatas = $y * $x;
                    // echo "$y * $x = $rezultatas";
                    echo '</td>';
                }

                echo '</tr>';
            }
        ?>
    </table>





    
</body>
</html>