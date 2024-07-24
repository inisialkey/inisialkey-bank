<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OperatorCard;
use Illuminate\Http\Request;

class OperartorCardController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->query('limit') ? $request->query('limit') : 10;

        $operatorCards = tap(
            OperatorCard::with('dataPlans')
                ->where('status', 'active')
                ->paginate($limit),
            function ($paginatedInstance) {
                return $paginatedInstance->getCollection()->transform(function ($item) {
                    $item->thumbnail = $item->thumbnail ? url($item->thumbnail) : "";
                    return $item;
                });
            }
        );

        return response()->json($operatorCards);
    }
}
