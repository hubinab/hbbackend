<?php

declare(strict_types=1);
ini_set("display_errors", 1);
error_reporting(E_ALL);

$vegyes = [5, 9, "Hello", 11.2, "Béla", 33, "Márta", 48.98, 7];

if ($argc !== 2) 
{
    echo "A szkript pontosan egy paramétert vár!\n";
    exit(1);
}

$a = $argv[1];

if ($a !== "szamok" && $a !== "egesz" && $a !== "valos" && $a !== "szoveg") {
    echo "A paraméter csak 'szamok', 'egesz', 'valos', vagy 'szoveg' lehet.\n";
}

switch ($a) {
    case "szamok":
        for ($i=0; $i < count($vegyes); ++$i) { 
            if (is_numeric($vegyes[$i])) {
                $szamok[] = $vegyes[$i];
                echo count($szamok) . ". szám: {$vegyes[$i]}\n";
            }
        }
//        echo print_r($szamok) . "\n";
        break;
    case "egesz":
        for ($i=0; $i < count($vegyes); ++$i) { 
            if (is_int($vegyes[$i])) {
                $egeszSzamok[] = $vegyes[$i];
                echo count($egeszSzamok) . ". egész szám: {$vegyes[$i]}\n";
            }
        }
        break;
    case "valos":
        for ($i=0; $i < count($vegyes); ++$i) { 
            if (is_float($vegyes[$i])) {
                $valosSzamok [] = $vegyes[$i];
                echo count($valosSzamok) . ". valós szám: {$vegyes[$i]}\n";
            }
        }
        break;
    case "szoveg":
        foreach ($vegyes as $elem) {
            if (is_string($elem)) {
                $szovegek[] = $elem;
                echo count($szovegek) . ". szöveg: {$elem}\n";
            }
        }
        break;
}
