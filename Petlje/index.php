<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pelje</h1>
    <hr>

    <?php 
        // WHILE petlja - broji od 1 do 10
        echo "WHILE";
        echo"<br/>";
        $i = 1;
        while ($i < 11) {
            echo $i . " "; // ispisuje trenutnu vrijednost varijable $i
            $i++; // povećava $i za 1
        }

        echo"<hr>";

        // FOR petlja - ispis parnih brojeva od 2 do 100 (povećanje po 2)
        echo "FOR";
        echo"<br/>";
        for ($i = 2; $i <= 100; $i += 2){
           echo $i .  " ";
        }

        echo"<hr>";

        // FOR petlja - ispis parnih brojeva od 1 do 100 pomoću uvjeta
        echo "FOR";
        echo"<br/>";
        for ($i = 1; $i <= 100; $i ++){
            if($i % 2 === 0){ // ako je broj djeljiv s 2, znači paran
                echo $i .  " ";
            }
         }
    ?>

    <h2>Drugi zadatak</h2>

    <?php 
    echo "<hr>";

    // Obični (indeksirani) niz imena
    $names = ['Matej', 'Ivan', 'Marko', 'Luka', 'Ilija'];

    // Asocijativni niz - svaki element ima svoj ključ
    $asocNames = [
        'ime1' =>'Matej',
        'ime2' => 'Ivan',
        'ime3' => 'Marko',
        'ime4' => 'Luka',
        'ime5' => 'Ilija',
    ];

    // Foreach petlja prolazi kroz svaki element običnog niza $names
    // Ispisuje samo vrijednosti (imena)
    foreach ($names as $name) {
        echo '<br/>'. $name .''; 
    }

    // Prikaz objašnjenja sintakse
    echo 'FOREACH  key => $name sintaksa: ';
    echo '<br/>';

    // Foreach petlja s ključem i vrijednošću iz $names niza
    foreach ($names as $key => $name) {
        echo $key .' => '. $name .'<br/>'; // npr. 0 => Matej
    }

    // Foreach kroz asocijativni niz - samo ispis vrijednosti
    foreach ($asocNames as $key => $currentValue) {
        echo $currentValue .'<br/>';
    }

    echo 'FOREACH  key => $currentValue sintaksa: ';
    echo '<br/>';

    // Foreach kroz asocijativni niz - ispis i ključa i vrijednosti
    foreach ($asocNames as $key => $currentValue) {
        echo $key .' => '. $currentValue .'<br/>'; // npr. ime1 => Matej
    }
    ?>
</body>
</html>