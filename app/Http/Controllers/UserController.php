<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Material;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function calculate(Request $request)
    {
        $item = Item::find($request->item_id);
        $materials = Material::all();

        $needed = [
            'wood' => $item->wood * $request->quantity,
            'paint' => $item->paint * $request->quantity,
            'glass' => $item->glass ? $item->glass * $request->quantity : 0,
        ];

        return view('main.hasilaplikasiuser', compact('needed', 'materials'));
    }
}
