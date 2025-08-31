<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Get all menu items
    public function index()
    {
        return response()->json(MenuItem::all());
    }

    // Add single item manually (optional)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric'
        ]);

        $item = MenuItem::create($request->all());
        return response()->json($item, 201);
    }

    // Seed default menu items
    public function seedMenu()
    {
        $defaultItems = [
            ['name' => 'Burger', 'price' => 150],
            ['name' => 'Pizza', 'price' => 300],
            ['name' => 'Pasta', 'price' => 200],
            ['name' => 'French Fries', 'price' => 120],
            ['name' => 'Coke', 'price' => 60],
        ];

        foreach ($defaultItems as $item) {
            MenuItem::firstOrCreate($item);
        }

        return response()->json(['message' => 'Menu seeded successfully', 'menu' => MenuItem::all()]);
    }
}
