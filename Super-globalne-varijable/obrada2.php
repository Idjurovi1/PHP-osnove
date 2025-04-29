<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Obrada-files</title>
</head>
<body>
  <h1>Obrada-files</h1>
  <hr>
  <?php
    // var_dump($_FILES); // Ovdje je zakomentiran var_dump koji bi ispisao sve podatke unutar $_FILES globalne varijable.
    
    // Prolazimo kroz $_FILES, koja sadrži informacije o svim poslanim datotekama
    foreach ($_FILES as $key => $value) {
      // Provjeravamo je li trenutna vrijednost niz (što znači da je datoteka s više atributa)
      if (is_array($value)) {
        // Ako je niz, prolazimo kroz njega da bismo ispisali svaki element
        foreach ($value as $k => $v) {
          print_r($k . ' : ' . $v . '<br>'); // Ispisujemo ključ i njegovu vrijednost (npr. name, type, tmp_name, error, size)
        }
      } else {
        // Ako nije niz, jednostavno ispisujemo ključ i njegovu vrijednost
        print_r($key . ' : ' . $value . '<br>');
      }
    }

    // Definiramo putanju gdje će se datoteka pohraniti nakon što bude uspješno uploadana
    $uploadDestination = __DIR__ . '/uploads/'; 

    // Provjeravamo je li datoteka pod ključem 'slika' poslana putem forme
    if (isset($_FILES['slika'])) {
      $uploadedFile = $_FILES['slika']; // Sprema podatke o poslanom fajlu u varijablu

      // Provjera tipa datoteke (ako sadrži riječ 'image' u MIME tipu, onda znamo da je to slika)
      if (str_contains($uploadedFile['type'], 'image')) {
        // Ako je datoteka slika, premještamo je u željeni direktorij 'uploads'
        move_uploaded_file($uploadedFile['tmp_name'], $uploadDestination . $uploadedFile['name']);
      } else {
        // Ako datoteka nije slika, ispisujemo poruku
        echo 'Datoteka nije slika.';
      }
    }
  ?>
</body>
</html>