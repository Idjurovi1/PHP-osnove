<?php
    // Definicija varijabli s različitim tipovima podataka
    
    // Cijeli broj (integer)
    $integerVar = 42;
    
    // Realni broj (floating-point number)
    $floatVar = 3.14;
    
    // Tekstualni podatak (string)
    $stringVar = "Pozdrav, svijete!";
    
    // Logička vrijednost (boolean)
    $booleanVar = true;
    
    // Ispis definiranih varijabli
    echo "Cijeli broj: " . $integerVar . "\n";
    echo "Realni broj: " . $floatVar . "\n";
    echo "Tekstualni podatak: " . $stringVar . "\n";
    echo "Logička vrijednost: " . ($booleanVar ? "true" : "false") . "\n";
    
    // Definicija konstanti
    define("PI", 3.14159);
    define("GRAVITY", 9.81);
    
    // Ispis konstanti
    echo "Konstanta PI: " . PI . "\n";
    echo "Konstanta GRAVITY: " . GRAVITY . "\n";
    
    // Rad s referenciranjem varijabli
    $a = 10;  // Definicija varijable a
    $b = &$a; // Referenciranje varijable b na varijablu a
    
    // Ispis varijable b prije promjene a
    echo "Vrijednost varijable b (prije promjene a): " . $b . "\n";
    
    // Promjena vrijednosti varijable a
    $a = 20;
    
    // Ispis varijable b nakon promjene a
    echo "Vrijednost varijable b (nakon promjene a): " . $b . "\n";
    
?>