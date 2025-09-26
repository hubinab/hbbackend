<?php

declare(strict_types=1);
ini_set("display_errors", 1);
error_reporting(E_ALL);

$szamok = [1, 5, 8, 17, 25, 34];

echo "2. feladat\n";
echo count($szamok) . "\n";

echo "\n3. feladat\n";
echo "Első szám: " . $szamok[0] . "\n";
echo "Utolsó szám:" . $szamok[count($szamok) - 1] . "\n";

echo "\n4. feladat\n";

for ($i=0; $i < count($szamok); ++$i) {
    if ($i === count($szamok)-1) {
        echo $szamok[$i] . "\n";
} 
    else {
        echo $szamok[$i] . ", ";
    }
}

echo "\n5. feladat\n";

foreach ($szamok as $szam) {
    if ($szam % 2 === 0) {
        echo $szam . "\n";
    }
}

echo "\n6. feladat\n";

for ($i=count($szamok)-1; $i >= 0; --$i) {
        echo $szamok[$i] . "\n";
}

echo "\n7. feladat\n";
$osszeg = 0;
foreach ($szamok as $szam) {
    $osszeg += $szam;
}
echo $osszeg . "\n";

echo "\n8. feladat\n";
$average = round($osszeg / count($szamok), 2);
echo $average . "\n";