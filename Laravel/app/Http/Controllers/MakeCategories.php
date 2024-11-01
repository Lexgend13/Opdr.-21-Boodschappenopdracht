<?php

namespace App\Http\Controllers;
use App\Models\Category;

$newCategories = ['Beverages', 'Bread/Bakery', 'Canned/Jarred Goods', 'Dairy', 'Dry/Baking Goods', 'Frozen Foods', 'Meat', 'Produce', 'Other (overige)'];

for ($i = 1; $i < 10; $i++) {
    Category::create([
        'id' => $i,
        'category' => $newCategories[array_rand($newCategories)]       
        ]);
    }