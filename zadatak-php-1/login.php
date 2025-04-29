<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div{
        border: 1px solid black;
        margin: 30px;
        padding: 30px;
    }
</style>
<body>
    <h1>Login</h1>
    <?php include("obrazac.php");
    ?>
    <div>
    <?php 
    $ime = 'Ivan';
    $prezime = "Djurovic";
    
    // Konkatenacija stringova s razmakom
    $full_name = $ime . ' ' . $prezime; // Koristi se tačka za spajanje stringova
    echo $full_name;   
    echo "<br/>";

    $godine = 20;

    // Konkatenacija stringova s tekstom i varijablom
    echo $ime . ' ima ' . $godine . ' godina'; // Dodani razmaci unutar stringova
    echo "<br/>";

    $je_li_musko = true;

    // Provjera logičke vrijednosti i ispis s razmakom
    if ($je_li_musko == true) {
        echo $ime . ' je muško'; // Dodani razmaci
    } else {
        echo $ime . ' je žensko'; // Dodani razmaci
    }
        
    echo "<br/>";

    // Definiranje i ispis konstante
    define("PI", 3.14159);
    echo 'PI je: ' . PI;

    echo "<br/>";

    // Ispis varijable a unutar stringova
    $varijabla_a = 'A';

    echo "Varijabla a je: $varijabla_a"; // Ispravno interpolirana varijabla
    echo "<br/>";

    echo 'Varijabla a je: ' . $varijabla_a; // Koristi se tačka za spajanje stringova
    ?>
</div>
</body>
</html>