<?php
declare(strict_types=1);
ini_set("display_errors", 1);
error_reporting(E_ALL);

$v1 = 
[
    "rajtszam" => "3",
    "nev" => "Daniel Ricciardo",
    "orszag" => "Australia",
    "szulido" => "1989.07.01",
];

$v2 = 
[
    "rajtszam" => "4",
    "nev" => "Lando Norris",
    "orszag" => "United Kingdom",
    "szulido" => "1999.11.13",
];

$v3 = 
[
    "rajtszam" => "5",
    "nev" => "Sebastian Vettel",
    "orszag" => "Germany",
    "szulido" => "1987.07.03",
];

$v4 = 
[
    "rajtszam" => "7",
    "nev" => "Kimi Raikkönen",
    "orszag" => "Finland",
    "szulido" => "1979.10.17",
];

$versenyzok = 
[
    "3" => $v1,
    "4" => $v2,
    "5" => $v3,
    "7" => $v4,
];