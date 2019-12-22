<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MenuCategory;

class MenuCategoryController extends Controller
{
    public function get()
    {
        $menuCatergories = MenuCategory::all();

        return view('admin.menu.categories', [
            'menuCategories' => $menuCatergories,
        ]);
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|max:255',
        ]);

        $menuCategory = new MenuCategory();
        $menuCategory->category_name = $request->category_name;
        $menuCategory->save();

        // Put the message in session
        $request->session()->flash('success', 'Menu category has been created.');

        return redirect()->route('admin.menu.categories');
    }

    public function delete($id, Request $request)
    {
        $menuCategory = MenuCategory::find($id);
        $menuCategory->delete();

        // Put the message in session
        $request->session()->flash('success', 'Menu category has been deleted.');

        return redirect()->route('admin.menu.categories');
    }
}
