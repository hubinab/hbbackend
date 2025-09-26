<?php
declare(strict_types=1);
ini_set("display_errors", 1);
error_reporting(E_ALL);

include "jaratok.php";

if ($argc > 3) 
{
    echo "Túl sok paraméter!\n";
    exit(4);
}

$p1 = $argv[1] ?? "";
$p2 = $argv[2] ?? "";

if ($p1 === "" && $p2 === "") {
    foreach ($jaratok as $k1 => $v1) {
        echo "$k1\t$v1[honnan]-$v1[hova] $v1[indul]-$v1[erkezik]\t$v1[legitarsasag]\n";
    }
}
elseif ($p1 !== "" && $p2 === "") {
    $x = $jaratok[$p1] ?? "";
    if ($x === "") {
        echo "A keresett járat ($p1) nem található!\n";
        exit(7);
    }
    else {
        echo "$x[honnan]-$x[hova] $x[indul]-$x[erkezik] ($x[legitarsasag])\n";
    }
}
elseif ($p1 !== "" && $p2 !== "" && ($p1 === "legitarsasag" || $p1 === "repter")) {
    if ($p1 === "legitarsasag") {
        $c = 0;
        foreach ($jaratok as $k1 => $v1) {
            if ($v1[$p1] === $p2) {
               $c++; 
            }
        }
        echo "A(z) $p2 légitársaságnak $c járata van az adatok között.\n";
    }
    else {
        $c = 0;
        foreach ($jaratok as $k1 => $v1) {
            if ($v1["honnan"] === $p2 || $v1["hova"] === $p2) {
               $c++;
            }
        }
        echo "A(z) $p2 azonosítójú reptér {$c}x szerepel az adatok között.\n";
    }
}
else {
    echo "Ismeretlen paraméter '$p1'\n";
    exit(9);
}