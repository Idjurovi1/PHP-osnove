<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funkcije</title>
</head>
<body>
  <h1>Funkcije</h1>
  <h2>Prvi zadatak</h2>
  <hr>
  <?php
    // Funkcija koja prima tekst i samo ga vraća
    function vratiTekst($txt) {
      return $txt;
    }

    // Poziv funkcije vratiTekst() i ispis rezultata
    $tekst = vratiTekst('Tekskskkskskskt');
    echo $tekst;
  ?>

  <hr>

  <?php
    // Funkcija koja zbraja dva broja i ispisuje rezultat ako je $printResult true
    function addNumbers($a, $b, $printResult = false) {

      $sum = $a + $b; // Zbroj dvaju brojeva

      if ($printResult) { // Ako treba ispisati rezultat
        echo '$a + $b = ' . $sum;
      }

      echo '* <br>'; // Ovaj znak '*' se uvijek ispisuje

      return $sum; // Funkcija vraća sumu
    }

    // Pozivi funkcije s raznim parametrima
    addNumbers(17, 10, true);   // Ispisat će sumu i '*'
    addNumbers(5, 6, false);    // Samo će ispisati '*'
    addNumbers(5, 6);           // Isto kao gore jer je zadani $printResult = false
    addNumbers(5, 6, 0);        // Isto kao gore (0 se tumači kao false)
    addNumbers(5, 6, 1);        // Ispisuje sumu jer je 1 true
    addNumbers(5, 6, 100);      // Isto kao gore (100 je true)
    addNumbers(1, 2, true, 0, 5, true); // Višak parametara - PHP ih ignorira
  ?>

  <hr>
  <h2>Drugi zadatak</h2>

  <?php
    // Funkcija koja spaja ime i prezime i pretvara ih u velika slova
    function getFullNameToUpper($name, $surname) {
      $fullName = $name . ' ' . $surname; // Spajanje imena i prezimena
      $fullName = strtoupper($fullName); // Pretvaranje u velika slova
      return $fullName; // Vraća veliko ime i prezime
      // strtolower(); // Zakomentirano - za pretvaranje u mala slova
    }

    // Poziv funkcije
    $luka = getFullNameToUpper('Luka', 'Horvat');
    echo $luka; // Ispis rezultata
  ?>

  <hr>

  <h2>Doseg varijabli</h2>

  <?php
    // Funkcija koja pokazuje razliku između obične i statičke varijable
    function primjerDosega() {
      $a = 0; // Obična varijabla - resetira se pri svakom pozivu funkcije
      static $b = 0; // Statička varijabla - pamti svoju vrijednost između poziva

      echo '$a: ' . $a . ' ; $b: ' . $b . '<br>';

      $a++; // Povećava se samo u trenutnom pozivu
      $b++; // Pamti povećanje i u sljedećem pozivu
    }
    primjerDosega();
    primjerDosega();
    primjerDosega();

    //for($i = 0; $i < 100; $i++) {
    //   primjerDosega(); // Ovime bismo pozvali primjerDosega() 100 puta
    // }

    for ($i = 5; $i < 4; $i++) {
      // Ovaj kod se nikada neće izvršiti jer je uvjet odmah lažan
      echo 'Ovo se nece nikada ispisati.';

    }

    $j = 5;
    do {
      // Ovaj kod će se barem jednom izvršiti jer do-while prvo izvršava, pa onda provjerava uvjet,jednom ce se ispisati poruka od echo
      echo 'Ovo se nece nikada ispisati.'; 
      $j++;
    } while ($j < 4);
  ?>

  <hr>

  <h2>Treći zadatak</h2>
  <?php
    // Funkcija koja zbraja broj na kumulativnu sumu koristeći statičku varijablu
    function addToCurrentSum($number) {
      static $sum = 0; // Statička suma koja pamti vrijednost između poziva
      $sum += $number; // Dodaje novi broj sumi

      echo '$sum: ' . $sum . '<br>';

      return $sum;
    }

    // Primjer s drugom funkcijom sličnog ponašanja
    function addToCurrentSummmmm($number) {
      static $sum = 0; // Ovdje je zasebna statička varijabla
      $sum += $number;

      echo '$sum: ' . $sum . '<br>';

      return $sum;
    }

    // Pozivi funkcije addToCurrentSummmmm() - suma raste samo unutar ove funkcije
    addToCurrentSummmmm(1);
    addToCurrentSummmmm(1);
    addToCurrentSummmmm(1);
    addToCurrentSummmmm(1);
    addToCurrentSummmmm(1);
    // Funkcija addToCurrentSum() još nije pozvana

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';

    // Poziv funkcije preko varijable (varijabla $add sadrži ime funkcije)
    $add = 'addToCurrentSum';

    for ($i = 0; $i < 5; $i++) {
      $add(rand(1, 10)); // Poziva se addToCurrentSum() sa slučajnim brojem od 1 do 10
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';

    //$add = 'addToCurrentSummmmm';

   // for ($i = 0; $i < 5; $i++) {
      //$add(rand(1, 10)); // Poziva se addToCurrentSum() sa slučajnim brojem od 1 do 10
    //}
  ?>
</body>
</html>