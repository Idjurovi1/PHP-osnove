<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kontrolne strukture</h1>
    <h2>Prvi zadatak</h2>
    <hr>
    <?php
        // Definiranje 3 varijable
        $a = 5;
        $b = 10;
        $c = 15;
        
        // Prva provjera pomoću uvjeta (if)
        // Provjerava je li b između a i c bez obzira na redoslijed a i c
        if ($b > $a && $b < $c || $b < $a && $b > $c) {
            echo 'Varijabla b je između a i c';
        } else {
            echo 'Varijabla b nije između a i c';
        }

        echo'<hr>';

        // Druga provjera - ista logika kao gore, samo podijeljena u dva bloka
        if ($b > $a && $b < $c) {
            echo 'Varijabla b je između a i c';
        } else if ($b < $a && $b > $c){
            echo 'Varijabla b je između a i c';
        } else {
            echo 'Varijabla b nije između a i c';
        }

        echo '<hr>';

        // Treća provjera - koristi switch za isti slučaj (napredno)
        // U switch-u se koriste izrazi kao case (malo rjeđe se ovako koristi)
        switch ($b) {
            case $b > $a && $b < $c :
                echo 'Varijabla b je između a i c';
                break; 
            case $b < $a && $b > $c :
                echo 'Varijabla b je između a i c';
                break;
            default :
                echo 'Varijabla b nije između a i c';
        }
    ?>
    
    <h2>Drugi zadatak</h2>
    <hr>
    <?php 
        // Dohvaća trenutačni dan u tjednu kao broj (1 = Ponedjeljak, ..., 7 = Nedjelja)
        $dan = date('N');
        echo 'Danas je ' . $dan  . ' dan u tjednu';
        echo'<hr>';
        
        // Switch struktura koja ispisuje ime dana na temelju broja
        switch ($dan) {
            case 1:
                echo 'Danas je Ponedjeljak';
                break;
            case 2:
                echo 'Danas je Utorak';
                break;
            case 3:
                echo 'Danas je Srijeda';
                break;
            case 4:
                echo 'Danas je Četvrtak';
                break;
            case 5:
                echo 'Danas je Petak';
                break;
            case 6:
                echo 'Danas je Subota';
                break;
            case 7:
                echo 'Danas je Nedjelja';
                break;
        }
    ?>
</body>
</html>