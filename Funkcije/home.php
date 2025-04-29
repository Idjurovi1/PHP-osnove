<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// 1. Deklaracija funkcije
function pozdrav() {
    return "Pozdrav! Učim PHP funkcije.";
}

// 2. Poziv funkcije i spremanje u varijablu
$tekst = pozdrav();

// 3. Ispis varijable
echo $tekst;
?>
</body>
</html>