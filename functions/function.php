<?php
function generaPassword()
{
    if (isset($_GET["passwordLength"])) {
        $fillers = [
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '!?&%$<>^+-*/()[]{}@#_=',
            '1234567890'
        ];
        $outString = '';
        //creare uno di questi caratteri
        for ($i = 0; $i < $_GET["passwordLength"]; $i++) {
            $outString .= fill1StringSpace($fillers[rand(0, 3)]);
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