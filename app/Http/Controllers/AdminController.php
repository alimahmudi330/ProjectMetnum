<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Material;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Get all items and materials from the database
        $items = Item::all(); // Can be used later if needed
        $materials = Material::all(); // Fetch all materials
        return view('components.welcome', compact('items', 'materials')); // Pass them to the view
    }

    public function updateStock(Request $request)
    {
        // Find material by ID and update the stock
        $material = Material::find($request->id);
        $material->stock = $request->stock; // Update stock value
        $material->save(); // Save updated material

        return redirect()->back()->with('success', 'Stok berhasil diperbarui'); // Redirect back with success message
    }
}
