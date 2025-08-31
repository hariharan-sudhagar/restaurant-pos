<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu = [
            [
                'name' => 'Margherita Pizza',
                'description' => 'Classic cheese and tomato pizza',
                'price' => 299.00,
                'image_url' => 'https://images.unsplash.com/photo-1604382354936-07c5d9983bd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'name' => 'Veggie Burger',
                'description' => 'Loaded with fresh vegetables and cheese',
                'price' => 199.00,
                'image_url' => 'https://images.unsplash.com/photo-1520072959219-c595dc870360?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'name' => 'Chicken Biryani',
                'description' => 'Aromatic rice with spiced chicken',
                'price' => 349.00,
                'image_url' => 'https://images.unsplash.com/photo-1512058564366-18510be2db19?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'name' => 'Pasta Alfredo',
                'description' => 'Creamy Alfredo pasta with mushrooms',
                'price' => 249.00,
                'image_url' => 'https://images.unsplash.com/photo-1551183053-bf91a1d81141?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'name' => 'French Fries',
                'description' => 'Crispy golden fries with salt',
                'price' => 99.00,
                'image_url' => 'https://images.unsplash.com/photo-1576107232684-1279f390859f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'name' => 'Paneer Butter Masala',
                'description' => 'Rich tomato gravy with soft paneer cubes',
                'price' => 279.00,
                'image_url' => 'https://images.unsplash.com/photo-1631452180539-96aca7d48617?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'name' => 'Tandoori Chicken',
                'description' => 'Smoky and juicy chicken legs marinated in spices',
                'price' => 399.00,
                'image_url' => 'https://images.unsplash.com/photo-1599487488170-d11ec9c172f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'name' => 'Chocolate Brownie',
                'description' => 'Warm brownie served with ice cream',
                'price' => 149.00,
                'image_url' => 'https://images.unsplash.com/photo-1606313564200-e75d5e30476c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'name' => 'Cold Coffee',
                'description' => 'Refreshing cold coffee with whipped cream',
                'price' => 129.00,
                'image_url' => 'https://images.unsplash.com/photo-1517701604599-bb29b565090c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'name' => 'Mango Icecream',
                'description' => 'Sweet and creamy mango Icecream',
                'price' => 109.00,
                'image_url' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'name' => 'Chicken Caesar Salad',
                'description' => 'Fresh romaine lettuce with grilled chicken, croutons and parmesan',
                'price' => 259.00,
                'image_url' => 'https://images.unsplash.com/photo-1546793665-c74683f339c1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'name' => 'Masala Dosa',
                'description' => 'Crispy Fried Paneer cubes filled with spiced potato, onions and served with mint chutney',
                'price' => 179.00,
                'image_url' => 'https://images.unsplash.com/photo-1567188040759-fb8a883dc6d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80'
            ]
        ];

        foreach ($menu as $item) {
            MenuItem::create($item);
        }
    }
}