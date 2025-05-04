<?php



const JSON_FILE_PATH = __DIR__ . DIRECTORY_SEPARATOR ."words.json";


//dohvacanje rijeci iz post forme

if(!isset($_POST['rijec'])) {
    return false;
}

$rijec = trim($_POST["rijec"]);

//saljem rijec u funkciju
//print_r(parsirajRijec($rijec));

$parsedData = parsirajRijec($rijec);
//poziv funckije savedtofile

saveToFile($parsedData);

// prebroji samoglasnike
function parsirajRijec($rijec)
{
    $arraySamoglasnika = ['a', 'e', 'i', 'o', 'u'];
    $znakovi = str_split(strtolower($rijec));
    
    $ukupnoZnakova = mb_strlen($rijec);

    $countSamoglasnika = 0;
    $countSuglasnika = 0;

    foreach ($znakovi as $key => $value) {

        if (in_array($value, $arraySamoglasnika)) {
            $countSamoglasnika++;
        } else {
            $countSuglasnika++;
        }
    }

    return [
        "rijec" => $rijec,
        "brojSlova" => $ukupnoZnakova,
        "brojSamoglasnika" => $countSamoglasnika,
        "brojSuglasnika" => $countSuglasnika,
        
    ];
}

function getFromFile() {
    $file = file_get_contents(JSON_FILE_PATH);
    
    $existingData = "";

    if(strlen($file)){
        $existingData = json_decode($file, true);
    }
    return $existingData;
}

function saveToFile($parsedData) {
    //read
    
    $existingData = getFromFile();

    array_push($existingData, $parsedData);

    file_put_contents(JSON_FILE_PATH, json_encode($existingData, JSON_UNESCAPED_UNICODE));

    

    //wrtie


}

// prebroji suglasnike

/*echo '----------------------------------------';
echo '<pre>';
var_dump('tu smo sad');
var_dump($_POST);
var_dump("vrijednost iiiiii post variable je: " . $_POST["a"][2]);

echo '</pre>';


return 'aaaaa';

*/
