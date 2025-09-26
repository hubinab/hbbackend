<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';
use Faker\Factory;

ini_set ("display_errors", 1); 
error_reporting(E_ALL);

$p1 = $argv[1] ?? "";

$faker = Factory::create("hu_HU");
$ct = $faker->creditCardType();
$c = $faker->creditCardNumber($ct, true);

if ($p1 === "lejart") {
    $ed = $faker->date("m/y");
}
else {
    $ed = $faker->creditCardExpirationDateString();
}
$ccv = 123;
$n = "Kis Géza";

echo "Kártya típusa: {$ct}\n";
echo "Kártyaszám: {$c}\n";
echo "Kártya lejárati ideje (hó/év): {$ed}\n";
echo "CCV: {$ccv}\n";
echo "Név: {$n}\n";
