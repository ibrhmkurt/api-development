<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('perPage', 5);
        $items = Item::paginate($perPage);

        return response()->json($items);
    }
}
