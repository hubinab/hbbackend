<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CalendarController extends Controller
{
    protected static $weekdays = ["hétfő", "kedd", "szerda", "csütörtök", "péntek", "szombat", "vasárnap"];

    function today(): JsonResponse 
    {
        return response()->json([
                "data" => [
                "title" => "Ma",
                "date" => today()->format('Y-m-d'),
                ]]);
    }

    function yesterday(): JsonResponse 
    {
        return response()->json([
                "data" => [
                "title" => "Ma",
                "date" => now()->subDay()->format('Y-m-d'),
                ]]);
    }
    
    function tomorow(): JsonResponse 
    {
        return response()->json([
                "data" => [
                "title" => "Ma",
                "date" => now()->addDay()->format('Y-m-d'),
                ]]);
    }

    function weekdayName(int $number): JsonResponse
    {
        if ($number < 1 || $number > 7) {
            return response()->json([
                    "error" => "A hét napjához adja meg a sorszámát (1 és 7 közötti szám)"]);
        }
        return response()->json([
                "data" => self::$weekdays[$number-1]]);
    }

    function weekdayNumber(string $name): JsonResponse
    {
        if (!in_array($name, self::$weekdays)) {
            return response()->json([
                    "error" => "Ismeretlen nap!"]);
        }
        return response()->json([
                "data" => array_search($name, self::$weekdays, true)+1]);
    }
}
