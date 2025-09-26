<?php
declare(strict_types=1);
ini_set("display_errors", 1);
error_reporting(E_ALL);

include "en.php";

$en += ["jelszo" => "vau", "titok" => "szeretem a csontot!"];

if ($argc !== 2) 
{
    echo "A szkript pontosan 1 paramétert vár!\n";
    exit(1);
}

$p = $argv[1];

//print_r($en);

if ($p === "nev") {
    echo $en["nev"] . "\n";
} elseif ($p === "szuletesi_datum") {
    echo $en["szuletesi_datum"] . "\n";
} elseif ($p === "kor") {
    echo $en["kor"] . "\n";
} elseif ($p === "kedvenc_szin") {
    echo $en["kedvenc_szin"] . "\n";
} elseif ($p === $en["jelszo"]) {
    echo $en["titok"] . "\n";
} else {
    echo "Ismeretlen paraméter!\n";
    exit(2);
}