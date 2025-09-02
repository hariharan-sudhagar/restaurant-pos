<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    // Get all menu items
    public function index()
    {
        return response()->json(MenuItem::all());
    }

    // Create a new menu item
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_url' => 'nullable|url',
        ]);

        $item = new MenuItem();
        $item->name = $request->name;
        $item->description = $request->description ?? null;
        $item->price = $request->price;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('menu-images', 'public');
            $item->image_url = url('storage/' . $path);
        } elseif ($request->has('image_url')) {
            $item->image_url = $request->image_url;
        }

        $item->save();
        return response()->json($item, 201);
    }

    // Get a single menu item
    public function show($id)
    {
        $item = MenuItem::findOrFail($id);
        return response()->json($item);
    }

    // Update a menu item
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'sometimes|string',
            'description' => 'sometimes|string',
            'price' => 'sometimes|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_url' => 'nullable|url',
        ]);

        $item = MenuItem::findOrFail($id);

        if ($request->has('name')) {
            $item->name = $request->name;
        }
        if ($request->has('description')) {
            $item->description = $request->description;
        }
        if ($request->has('price')) {
            $item->price = $request->price;
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('menu-images', 'public');
            $item->image_url = url('storage/' . $path);
        } elseif ($request->has('image_url')) {
            $item->image_url = $request->image_url;
        }

        $item->save();
        return response()->json($item);
    }

    // Delete a menu item
    public function destroy($id)
    {
        try {
            $item = MenuItem::findOrFail($id);
            $item->delete();
            return response()->json(['message' => 'Menu item deleted successfully']);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to delete item',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
