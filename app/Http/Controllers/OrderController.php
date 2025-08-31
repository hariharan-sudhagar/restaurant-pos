<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Place a new order
    public function store(Request $request)
    {
        // Validate only items
        $validated = $request->validate([
            'customer_name' => 'nullable|string|max:255',
            'items' => 'required|array',
            'items.*.menu_item_id' => 'required|exists:menu_items,id',
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        // Auto-generate dummy customer name
        $lastOrderId = Order::max('id') ?? 0;
        $dummyName = 'Customer ' . ($lastOrderId + 1);

        // Create order
        $order = Order::create([
            'customer_name' => $validated['customer_name'] ?? $dummyName,
            'status' => 'pending',
            'total_price' => 0,
        ]);

        $totalPrice = 0;

        // Create order items
        foreach ($validated['items'] as $item) {
            $menuItem = MenuItem::find($item['menu_item_id']);
            $linePrice = $menuItem->price * $item['quantity'];

            OrderItem::create([
                'order_id' => $order->id,
                'menu_item_id' => $menuItem->id,
                'quantity' => $item['quantity'],
                'price' => $linePrice,
            ]);

            $totalPrice += $linePrice;
        }

        // Update order total
        $order->update(['total_price' => $totalPrice]);

        return response()->json([
            'message' => 'Order placed successfully!',
            'order' => $order->load('items.menuItem'), // include items with menu details
        ], 201);
    }

    // Fetch all orders (for POS apps)
      
        public function index()
        {
            $orders = Order::with('items.menuItem')
                ->orderBy('created_at', 'desc')
                ->get();

            // Return direct array, not wrapped in 'orders' key
            return response()->json($orders);
        }

                public function update(Request $request, $id)
        {
            $validated = $request->validate([
                'status' => 'required|in:pending,in_progress,ready,completed'
            ]);

            $order = Order::findOrFail($id);
            $order->update(['status' => $validated['status']]);

            return response()->json([
                'message' => 'Order status updated successfully',
                'order' => $order->load('items.menuItem')
            ]);
        }
 }
