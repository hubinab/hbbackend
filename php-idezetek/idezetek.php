<?php
declare(strict_types=1);

use Culture\Movie\Quotation;

ini_set ("display_errors", 1); 
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

$o1 = new Quotation("Az Erő legyen veled.", "Obi-Wan Kenobi", "Csillagok háborúja");
$o2 = new Quotation("Az új magyar narancs. Kicsit sárgább, kicsitsavanyúbb, de a mienk!", "Pelikán", "A tanú");
$o3 = new Quotation("Tigris van a fürdőszobában!", "Stu Price", "Másnaposok");

$t = [$o1, $o2, $o3];

foreach ($t as $v) {
    echo "\n";
    echo "{$v->getText()}\n";
    echo "{$v->getPerson()} - {$v->getTitle()}\n";
}

echo "\n";
