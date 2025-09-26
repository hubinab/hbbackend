<?php
declare(strict_types=1);
ini_set("display_errors", 1);
error_reporting(E_ALL);

include("fuggvenyek.php");

echo hetNapja(6) . "\n";
echo napSorszama("hétfő") . "\n";

var_dump(parosE(5));
var_dump(parosE(8));

var_dump(paratlanE(5));
var_dump(paratlanE(8));

var_dump(oszthatoE(5, 5));
var_dump(oszthatoE(8, 5));

var_dump(negativE(-3));
var_dump(negativE(96));

echo szignum(-836) . "\n";  // -1
echo szignum(0) . "\n";     // 0
echo szignum(1024) . "\n\n";  // 1

echo datumIdo("óra") . "\n"; // 08
echo datumIdo("perc") . "\n"; // 11
echo datumIdo("másodperc") . "\n"; // 08
echo datumIdo("év") . "\n"; // 2022
echo datumIdo("hónap") . "\n"; // 09
echo datumIdo("nap") . "\n"; // 06
