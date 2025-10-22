<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CalculatorController extends Controller
{
    function result(int $a, string $operator, int $b): JsonResponse
    {
        if ($b === 0 && $operator === "/") {
            abort(404);
        }

        $title = ["+" => "Összeadás", "-" => "Kivonás", "*" => "Szorzás", "/" => "Osztás"];
        switch ($operator) {
            case '+':
                $result = $a+$b;
                break;
            case '-':
                $result = $a-$b;
                break;
            case '*':
                $result = $a*$b;
                break;
            case '/':
                $result = $a/$b;
                break;
        }
        return response()->json([
                "data" => [
                "title" => $title[$operator],
                "a" => $a,
                "b" => $b,
                "result" => $result
                ]]);
    } 
}
