<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class CalendarController extends Controller
{
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
}
