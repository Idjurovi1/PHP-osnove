<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OBRADA PODATAKA</h1>
    <hr>

    <!-- Prvi zadatak -->
    <h2>Prvi zadatak</h2>
    <?php
        // Provjerava je li $_POST prazna (nije poslana nikakva forma)
        $isPostEmpty = empty($_POST);

        if (!$isPostEmpty) {  // Ako $_POST nije prazan, nastavljamo s obradom podataka
            // Provjerava da li je 'ime' postavljeno i nije prazno
            if (isset($_POST['ime']) && strlen($_POST['ime']) > 0) {  
                echo 'Ime je: ' . $_POST['ime'] . '<br>';  // Ispisuje ime
            } else {
                echo 'Ime nije postavljeno.' . '<br>';  // Ako ime nije postavljeno
            }

            // Provjerava da li je 'prezime' postavljeno i nije prazno
            if (isset($_POST['prezime']) && strlen($_POST['prezime']) > 0) {  
                echo 'Prezime je: ' . $_POST['prezime'] . '<br>';  // Ispisuje prezime
            } else {
                echo 'Prezime nije postavljeno.' . '<br>';  // Ako prezime nije postavljeno
            }
        } else {
            echo 'Nema podataka za obradu.';  // Ako nije bilo podataka poslanih putem POST-a
        }
    ?>
    <hr>

    <!-- Drugi zadatak -->
    <h2>Drugi zadatak</h2>
    <hr>

    <?php 
        // Provjerava je li $_GET prazna (nije poslan niti jedan URL parametar)
        if (empty($_GET)) {
            echo 'Nema podataka u GET varijabli. ';  // Ako nema podataka u GET-u
        } else {
            // Ako postoje podaci, prolazimo kroz njih
            foreach ($_GET as $key => $value) {
                // Provjerava je li vrijednost parametra prazna
                if (strlen($value) > 0) {
                    echo $key .' : '. $value .'<br>';  // Ako vrijednost nije prazna, ispisuje ključ i vrijednost
                } else {
                    echo $key .' : Nema podataka<br>';  // Ako je vrijednost prazna, ispisuje poruku da nema podataka
                }
            }
        }
    ?>

</body>
</html>