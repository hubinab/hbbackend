<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class QuoteController extends Controller
{
    function house(): JsonResponse
    {
        return response()->json([
                "data" => [
                "title" => "House",
                "quote" => "Nemcsak az emberek megalázásával lehet a gőzt kiereszteni;...",
                "name" => "Dr. House",
                ]]);
    }

    function modernFamily(): JsonResponse
    {
        return response()->json([
                "data" => [
                "title" => "Modern Család",
                "quote" => "A siker mindig 1 százalék ihlet, plusz 98 százalék...",
                "name" => "Phil Dunphy",
                ]]);
    }

    function uvegtigrisCsoki(): JsonResponse
    {
        return response()->json([
                "data" => [
                "title" => "Üvegtigris",
                "quote" => "Mennyire vagy túsz? Sörhöz odaférsz?",
                "name" => "Csoki",
                ]]);
    }

    function uvegtigrisLali(): JsonResponse
    {
        return response()->json([
                "data" => [
                "title" => "Üvegtigris",
                "quote" => "Az egybubis az egy kicsit drágább, mert hát...",
                "name" => "Lali",
                ]]);
    }
    
    function harryPotter(string $slug): JsonResponse
    {
        if (!in_array($slug, ["fred-es-george", "hermione"])) {
            abort(404);
        } else if ($slug === "fred-es-george") {
            return response()->json([
                    "data" => [
                    "title" => "Harry Potter",
                    "quote" => "- Mindig is tudtuk hol a határ - bólintott Fred - És csak...",
                    "name" => "Fred és George",
                    ]]);
        }
        else {
            return response()->json([
                    "data" => [
                    "title" => "Harry Potter",
                    "quote" => "Még egy ilyen remek ötlet, és mindhárman meghalunk, vagy...",
                    "name" => "Hermione",
                    ]]);
        }
    }

}
