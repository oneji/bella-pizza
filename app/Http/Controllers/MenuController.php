<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuItem;
use App\MenuCategory;

class MenuController extends Controller
{
    public function get()
    {
        $menuItems = MenuItem::get();
        $menuCategories = MenuCategory::with('menu_items')->get();
        
        return view('site.menu', [
            'menuItems' => $menuItems,
            'menuCategories' => $menuCategories
        ]);
    }
}
