<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;

class TopListController extends Controller
{
    function index():JsonResponse
    {
        return response()->json(["data"=>DB::table("toplist")->get()]);
    }

    function categories():JsonResponse
    {
        return response()->json(["data"=>DB::table("toplist")->distinct()->pluck("category")]);
    }
    function films():JsonResponse
    {
        return response()->json(["data"=>DB::table("toplist")->where("category","like","Films%")->get()]);
    }
    function tvs():JsonResponse
    {
        return response()->json(["data"=>DB::table("toplist")->where("category","like","tv%")->get()]);
    }
    function popular():JsonResponse
    {
        return response()->json(["data"=>DB::table("toplist")
            ->where("cumulative_weeks_in_top_ten",">=","23")
            ->orWhere("weekly_hours_viewed",">=","158680000")
            ->orderBy("weekly_hours_viewed","desc")
            ->get()]);
    }
    function week(Request $request, string $week):JsonResponse
    {
        if (!($date = strtotime($week)))
            abort(404);

        $orders = ["id","category","weekly_rank","weekly_hours_viewed"];
        
        if (!in_array($order = $request->query("order_by","id"), $orders)) 
            abort(404);

        $direction = "asc";
        if ($order == "weekly_hours_viewed") $direction = "desc";

        $date = date('Y-m-d', $date);
        return response()->json([
            "data"=>[
                "week"=>$date,
                "items"=>DB::table("toplist")
                ->where("week","=",$date)
                ->orderBy($order,$direction)
                ->get()
            ]
        ]);
    }
    function top1(string $week):JsonResponse
    {
        if (!($date = strtotime($week)))
            abort(404);


        $date = date('Y-m-d', $date);
        return response()->json([
            "data"=>[
                "week"=>$date,
                "title"=>DB::table("toplist")
                ->where("week","=",$date)
                ->where("category","=","TV (English)")
                ->orderBy("weekly_rank", "asc")
                ->value("show_title")
            ]
        ]);
    }
}
