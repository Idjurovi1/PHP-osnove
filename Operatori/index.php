<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = 10;
        $b = 5;
        $c = 'Ivan';
        $d = 'Djurovic';

        echo 'Varijabla a: ' . $a . '<br>';
        echo 'Varijabla b: ' . $b . '<br>';
        echo 'Varijabla c: ' . $c . '<br>';
        echo 'Varijabla d: ' . $d . '<br>';
        
        echo '<br>';

        echo 'Zbrajanje: ' . ($a + $b) . '<br>';
        echo 'Oduzimanje: ' . ($a - $b) . '<br>';
        echo 'Množenje: ' . ($a * $b) . '<br>';
        echo 'Dijeljenje: ' . ($a / $b) . '<br>';
        echo 'Modul: ' . ($a % $b) . '<br>';

        echo '<br>';
        
        $f = $c .'-' . $d;
        echo 'Konkatenacija: ' . $f . '<br>';


        $a += $b; // a = a+b
        echo 'Kombinirani operator dodjele: ' . $a . '<br>';

        echo 'VAR DUMP' . '<br>';
        var_dump($a > $b);//rezultat ove usporedbe je true i uz true se ispisuje tip podatka

        echo '<br>';
        var_dump(10);

        echo '<br>';
        var_dump(1.5);

        echo '<br>';

        echo 'Trenutna vrijednost a varijable: ' . $a .'<br>';
        echo 'Nova vrijednost varijable a'. $a++ . '<br>';
        echo 'Nova vrijednost varijable a'. $a++ . '<br>';

        echo 'Trenutna vrijednost b varijable: ' . $b .'<br>';
        echo 'Nova vrijednost varijable b: '. $b-- . '<br>';
        echo 'Nova vrijednost varijable b: '. $b-- . '<br>';

        echo '<br>';

        echo 'Trenutna vrijednost a varijable: ' . $a .'<br>';
        echo 'Nova vrijednost varijable a: '. ++$a . '<br>';

        echo 'Trenutna vrijednost b varijable: ' . $b .'<br>';
        echo 'Nova vrijednost varijable b: '. --$b . '<br>';
        
        $primeNumbers = [1,3,5,7,9];

        var_dump(isset($names[3]));
        echo '<br>';
        var_dump($primeNumbers[3]);




        
       
    
    ?>
</body>
</html>