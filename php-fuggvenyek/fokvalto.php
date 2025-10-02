<?php
declare(strict_types=1);
ini_set("display_errors", 1);
error_reporting(E_ALL);

include("fuggvenyek.php");

$p1 = $argv[1] ?? 0;
$p2 = $argv[2] ?? "";
$a = ["c", "C", "celsius", "Celsius", "CELSIUS", "f", "F", "fahrenheit", "Fahrenheit", "FAHRENHEIT"];

if (!in_array($p2, $a))
{
    echo "Hibás paraméter!\n";
    exit(-2);
}

if ($p2[0] === "C" || $p2[0] === "c") 
{
    echo "{$p1} celsius " . number_format(c2f($p1),2) . " fahrenheit\n";
}
else {
    echo "{$p1} fahrenheit " . number_format(f2c($p1),2) . " celsius\n";
}