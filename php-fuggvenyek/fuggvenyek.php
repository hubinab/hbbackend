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

function utolso ($p):int
{
    return array_pop($p);
}

function osszeg($p):int
{
    return array_sum($p);
}

function szorzat($p):int
{
    $sz = 1;
    foreach ($p as $v) {
        $sz *= $v;
    }
    return $sz;
}

function parosDb($p):int
{
    $s = 0;
    foreach ($p as $v) {
        if (parosE($v)) {
            $s++;
        }
    }
    return $s;
}

function parosOsszeg($p):int
{
    $s = 0;
    foreach ($p as $v) {
        if (parosE($v)) {
            $s+=$v;
        }
    }
    return $s;
}

function elsoNOsszeg($p, $n):int
{
    if ($n > count($p)) {
        return -1;
    }

    $s = 0;
    for ($i=0; $i < $n; $i++) { 
        $s += $p[$i];
    }
    return $s;
}

function f2c($f):float
{
    return ($f-32)/1.8;
}

function c2f($c):float
{
    return $c*1.8+32;
}