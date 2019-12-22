<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MenuCategory;
use App\MenuItem;

class MenuController extends Controller
{
    public function get()
    {
        $menuCatergories = MenuCategory::all();
        $menuItems = MenuItem::all();

        return view('admin.menu', [
            'menuCategories' => $menuCatergories,
            'menuItems' => $menuItems
        ]);
    }

    public function addCategory(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|max:255',
        ]);

        $menuCategory = new MenuCategory();
        $menuCategory->category_name = $request->category_name;
        $menuCategory->save();

        // Put the message in session
        $request->session()->flash('success', 'Menu category has been created.');

        return redirect()->route('admin.menu');
    }

    public function deleteCategory($id, Request $request)
    {
        $menuCategory = MenuCategory::find($id);
        $menuCategory->delete();

        // Put the message in session
        $request->session()->flash('success', 'Menu category has been deleted.');

        return redirect()->route('admin.menu');
    }

    public function addMenuItem(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);

        if($request->hasFile('cover_image')) {
            $fileNameToStore = time().'.'.$request->cover_image->getClientOriginalExtension();
            $fileNameToStore = $request->cover_image->store('uploads/menu-items', ['disk' => 'my_files']);
        } else {
            $fileNameToStore = null;
        }

        $menuItem = new MenuItem();
        $menuItem->title = $request->title;
        $menuItem->description = $request->description;
        $menuItem->prices = $request->prices;
        $menuItem->menu_category_id = $request->menu_category_id;
        $menuItem->cover_image = $fileNameToStore;
        $menuItem->save();

        return redirect()->route('admin.menu');
    }
}
