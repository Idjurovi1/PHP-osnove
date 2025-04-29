<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varijable i konstante</title>
</head>
<body>
<div>
    <?php 
        // Definicija različitih tipova varijabli
        $integerVar = 7; // Cijeli broj (integer)
        $floatVar = 3.7; // Realni broj (floating-point number)
        $stringVar = 'Tekstualna varijabla'; // Tekstualni podatak (string)
        $booleanVar = true; // Logička vrijednost (boolean)

        // Ispis varijabli
        echo $integerVar; // Ispisuje: 7
        echo "<br/>"; // Novi red u HTML-u
        echo $floatVar; // Ispisuje: 3.7
        echo "<br/>";
        echo $stringVar; // Ispisuje: Tekstualna varijabla
        echo "<br/>";
        echo $booleanVar; // Ispisuje: 1 (u PHP-u, true se ispisuje kao 1)
        echo "<br/>";

        // Definicija konstante
        define("GRAVITACIJA", "9.81"); // Definira konstantu GRAVITACIJA s vrijednošću "9.81"
        echo GRAVITACIJA; // Ispisuje: 9.81
        echo "<br/>";

        // Demonstracija referenci
        $a = 1; // Varijabli $a dodijeljena vrijednost 1
        $b = &$a; // Varijabla $b je referenca na $a (b i a dijele isti prostor u memoriji)
        $a = 2; // Promjena vrijednosti varijable $a
        echo 'a:' . $a; // Ispisuje: a:2 (vrijednost $a je promijenjena na 2)
        echo "<br/>";
        echo 'b:' . $b; // Ispisuje: b:2 (vrijednost $b prati promjenu $a jer je referenca)
    ?>
</div>
</body>
</html>