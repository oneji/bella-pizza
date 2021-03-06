<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MenuCategory;
use App\MenuItem;

class MenuController extends Controller
{
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
