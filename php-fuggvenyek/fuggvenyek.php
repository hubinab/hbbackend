<?php
declare(strict_types=1);
ini_set("display_errors", 1);
error_reporting(E_ALL);

$napok = [1 => "hétfő", 2 => "kedd", 3 => "szerda", 4 => "csütörtök", 5 => "péntek", 6 => "szombat", 7 => "vasárnap"];

function hetNapja($szam)
{   
    global $napok;
    if ($szam < 1 || $szam > 7) {
        return "nincs ilyen nap";
    }

    return $napok[$szam];
}

function napSorszama($nap) 
{
    global $napok;
    return array_keys($napok, $nap)[0] ?? -1;
}

function parosE($szam)
{
    return $szam % 2 == 0;
}

function paratlanE($szam)
{
    return $szam % 2 != 0;
}

function oszthatoE($sz1, $sz2)
{
    return $sz1 % $sz2 == 0;
}

function negativE($szam)
{
    return $szam < 0;
}

function szignum($szam)
{
    if ($szam < 0) {
        return -1;
    }
    elseif ($szam === 0) {
        return 0;
    }
    else {
        return 1;
    }
}

function datumIdo ($p):string 
{
    $r = "";
    $t = getdate();
    switch ($p) {
        case 'év':
            return (string)$t["year"];
            break;
        case 'hónap':
            return mb_str_pad((string)$t["mon"], 2, "0", STR_PAD_LEFT);
            break;
        case 'nap':
            return mb_str_pad((string)$t["mday"], 2, "0", STR_PAD_LEFT);
            break;
        case 'óra':
            return mb_str_pad((string)$t["hours"], 2, "0", STR_PAD_LEFT);
            break;
        case 'perc':
            return mb_str_pad((string)$t["minutes"], 2, "0", STR_PAD_LEFT);
            break;
        case 'másodperc':
            return mb_str_pad((string)$t["seconds"], 2, "0", STR_PAD_LEFT);
            break;
        
        default:
            return "Hibás paraméter! Jelenlegi dátum: {$t}";
            break;
    }
}