<?php

declare(strict_types=1);
ini_set("display_errors", 1);
error_reporting(E_ALL);

if ($argc !== 3) 
{
    echo "Két paraméter szükséges!\n";
    exit(1);
}

$a = $argv[1];
$b = $argv[2];

if ($b < $a) {
    if ($a % 2 == 0) {
        --$a;
    }
    for ($i = $a; $i >= $b; $i-=2) { 
        echo "$i\n";
    }    
}
else {
    if ($a % 2 == 0) {
        ++$a;
    }
    for ($i = $a; $i <= $b; $i+=2) { 
        echo "$i\n";
    }    
}
