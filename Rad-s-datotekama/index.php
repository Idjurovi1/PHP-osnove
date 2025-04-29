<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rad s datotekama</title>
</head>
<body>
  <h1>Rad s datotekama</h1>
  <hr>
  
  <?php
    // 📌 1. Učitavanje sadržaja datoteke polaznici.json
    // '../polaznici.json' znači da se datoteka nalazi u gornjem direktoriju
    $polazniciContent = file_get_contents('../polaznici.json');

    // 📌 2. Pretvaranje JSON stringa u PHP asocijativni niz
    $polaznici = json_decode($polazniciContent, true);

    // 📌 3. Provjera je li JSON učitan ispravno
    if ($polaznici === null) {
        echo '<p style="color:red;">Greška: JSON nije učitan ili nije ispravan.</p>';
        $polaznici = []; // Ako nije ispravno, postavljamo prazni niz da ne dobijemo greške u foreach
    }
  ?>

  <!-- 📌 4. Prikaz tablice s podacima iz datoteke -->
  <table border="1">
    <tr>
      <th>Ime</th>
      <th>Prezime</th>
      <th>Godine</th>
      <th>Email</th>
      <th>Telefon</th>
    </tr>

    <?php
      // 📌 5. Funkcija za ispis polaznika u tablicu
      function ispisiPolaznike($nizPolaznika) {
        // Provjera da li postoji barem jedan polaznik
        if (empty($nizPolaznika)) {
            echo '<tr><td colspan="5" style="text-align:center;">Nema podataka</td></tr>';
            return;
        }

        // Prolazimo kroz svaki zapis u nizu polaznika
        foreach($nizPolaznika as $jedanPolaznik) {
          echo '<tr>'; // Početak retka u tablici

          // Svaka osoba ima više vrijednosti (ime, prezime, email, itd.)
          foreach($jedanPolaznik as $vrijednostiOsobe) {
            echo '<td>' . $vrijednostiOsobe . '</td>'; // Ispis vrijednosti unutar ćelije tablice
          }

          echo '</tr>'; // Kraj retka
        }
      }

      // 📌 6. Poziv funkcije za ispis polaznika u prvu tablicu
      ispisiPolaznike($polaznici);
    ?> 

  </table>

  <h2>Dodavanje novog polaznika</h2>
  <hr>

  <!-- 📌 7. Prikaz tablice nakon dodavanja novog polaznika -->
  <table border="1">
    <tr>
      <th>Ime</th>
      <th>Prezime</th>
      <th>Godine</th>
      <th>Email</th>
      <th>Telefon</th>
    </tr>

    <?php
      // 📌 8. Dodavanje novog polaznika u niz
      array_push($polaznici, [
        'name' => 'Marko',
        'surname' => 'Antic',
        'age' => 45,
        'email' => 'marko.antic@gmail.com',
        'phone' => '38599555666'
      ]);

      // 📌 9. Spremanje ažuriranog niza natrag u JSON datoteku
      file_put_contents('../polaznici.json', json_encode($polaznici, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

      // 📌 10. Ponovni poziv funkcije za ispis ažuriranog popisa polaznika
      ispisiPolaznike($polaznici);
    ?>

  </table>

</body>
</html>