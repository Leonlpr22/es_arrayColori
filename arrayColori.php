<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $num = rand(10, 20);

        $lista = [];
        for ($i = 0; $i <= $num; $i++) {
            $lista[] = $i;
        }

        $colori = ["rosso", "verde", "blu", "giallo", "arancione"];

        echo "<ol>";

        foreach ($lista as $numero) {
            $coloreCasuale = $colori[array_rand($colori)];
            
            echo "<li style= 'color: $coloreCasuale;'>$numero</li>";
        }

        echo "</ol>";
    ?>

</body>
</html>