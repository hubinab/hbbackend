<?php
declare(strict_types=1);
ini_set("display_errors", 1);
error_reporting(E_ALL);

include "versenyzok.php";

if ($argc > 2) 
{
    echo "Túl sok paraméter!\n";
    exit(8);
}

$p = $argv[1] ?? "";

if ($p === "") {
    echo "rajtsz.\tNév\t\t\tOrszág\t\tSzületési dátum";
    foreach ($versenyzok as $k1 => $v1) {
        echo "\n";
        foreach ($v1 as $k2 => $v2) {
            echo "$v2\t";
        }
    }
}
else {
    foreach ($versenyzok as $key => $value) {
        if ($value["orszag"] === $p) {
            echo "- {$value['rajtszam']} : {$value['nev']}";
        }
    }
}

echo "\n";
