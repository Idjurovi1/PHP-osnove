<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nizovi</title>
</head>
<body>
    <?php
    // ------------------------
    // PRVI ZADATAK: Rad s primarnim brojevima
    // ------------------------

    // Inicijalizacija niza s prvim primarnim brojevima
    $primeNumbers = [1, 3, 5, 7, 11];

    // Provjera postoji li treći element u nizu (indeks 2 jer brojanje kreće od 0)
    $isThirdElementSet = isset($primeNumbers[2]);
    if ($isThirdElementSet) {
        // Ako postoji, ispiši njegovu vrijednost
        var_dump($primeNumbers[2]);
    } else {
        // Ako ne postoji, ispiši poruku
        echo "Treci element ne postoji. ";
    }

    // Informativni ispis (ne utječe na logiku)
    echo 'Postoji li treći element? <br>';
    isset($primeNumbers[2]); // Ova linija ništa ne radi jer rezultat nije spremljen ni ispisan

    // Dodavanje novog elementa (šestog primarnog broja) na kraj niza
    $primeNumbers[] = 13;

    // Brojanje ukupnog broja elemenata u nizu
    $brojElemenataUNizu = count($primeNumbers);
    echo 'Broj elemenata u nizu: ' . $brojElemenataUNizu;

    echo '<br>';

    // Ispis cijelog niza uz dodatni tekst
    echo 'PRIME NUMBERS:<br>';
    echo '<pre>';
    var_dump($primeNumbers);
    echo '</pre>';

    echo "<br>";

    // Sortiranje niza po vrijednostima uzlazno (od najmanjeg prema najvećem)
    sort($primeNumbers);
    echo 'SORTED PRIME NUMBERS:<br>';
    echo '<pre>';
    var_dump($primeNumbers);
    echo '</pre>';

    // Sortiranje niza silazno (od najvećeg prema najmanjem)
    rsort($primeNumbers);
    echo 'RESORTED PRIME NUMBERS:<br>';
    echo '<pre>';
    var_dump($primeNumbers);
    echo '</pre>';

    // ------------------------
    // DRUGI ZADATAK: Višedimenzionalni niz korisnika
    // ------------------------

    // Inicijalizacija višedimenzionalnog niza s podacima o korisnicima
    $users = [
        'Ivan' => [
            'ime' => 'Ivan',
            'prezime' => 'Djurovic',
            'godine' => '33',
            'spol' => 'Musko'
        ],
        'Nastya' => [
            'ime' => 'Anastasiia',
            'prezime' => 'Kubrak',
            'godine' => '28',
            'spol' => 'Zensko'
        ]
    ];

    // Ispis početnog stanja korisnika
    echo '<pre>';
    var_dump($users);
    echo '</pre>';

    // Razdvajanje prikaza
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    // Uklanjanje ključa 'spol' iz oba korisnika
    unset($users['Ivan']['spol']);
    unset($users['Nastya']['spol']);

    // Ispis korisnika nakon uklanjanja spola
    echo '<pre>';
    var_dump($users);
    echo '</pre>';

    // Dodavanje novog korisnika "Mirko"
    $users['Mirko'] = [
        'ime' => 'Mirko',
        'prezime' => 'Filipovic',
        'godine' => '50',
        'spol' => 'Musko'
    ];

    // Ispis svih korisnika nakon dodavanja Mirka
    echo '<pre>';
    var_dump($users);
    echo '</pre>';

    ?>
</body>
</html>