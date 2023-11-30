<?php
function generaPassword()
{
    if (isset($_GET["passwordLength"])) {
        $isUniqueLetters = true;
        if (isset($_GET["repeat"])) {
            $isUniqueLetters = false;
        }
        //$isUniqueLetters = $_GET["repeat"] == "" ? true : false;
        $allOptionsArray = [
            'lettere',
            'simboli',
            'numeri'
        ];
        $optionsArray = [];
        for ($i = 0; $i < count($allOptionsArray); $i++) {
            if (@$_GET[$allOptionsArray[$i]] === null) {

            } else {
                $optionsArray[] = $_GET[$allOptionsArray[$i]];
            }
        }

        $fillers = [
            'lettere' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'simboli' => '!?&%$<>^+-*/()[]{}@#_=',
            'numeri' => '1234567890'
        ];

        //conto il numero di char
        $totalCharLength = 0;
        for ($i = 0; $i < count($optionsArray); $i++) {
            $totalCharLength += strlen($fillers[$optionsArray[$i]]);
        }

        //se stringa vuota cancello
        if ($totalCharLength === 0) {
            return null;
        }
        ;

        $outString = '';
        //creare uno di questi caratteri 
        for ($i = 0; $i < $_GET["passwordLength"]; $i++) {
            if ($isUniqueLetters) {
                //controllo che le opzioninon siano di piu dei char ripetuti
                if ($_GET["passwordLength"] > $totalCharLength) {
                    return null;
                }
                $thisLetter = '';
                while (str_contains($outString, $thisLetter)) {
                    $thisLetter = fill1StringSpace($fillers[$optionsArray[rand(0, count($optionsArray) - 1)]]);
                }
                $outString .= $thisLetter;
            } else {
                $outString .= fill1StringSpace($fillers[$optionsArray[rand(0, count($optionsArray) - 1)]]);

            }

        }
        return $outString;
    }
    return null;
}

function fill1StringSpace($arrayString)
{
    return $arrayString[rand(0, strlen($arrayString) - 1)];
}

?>