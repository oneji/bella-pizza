<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HomeSlide;

class HomeSlideController extends Controller
{
    public function get()
    {
        $slides = HomeSlide::all();

        return view('admin.slides', [
            'slides' => $slides
        ]);
    }

    public function upload(Request $request)
    {
        if($request->hasFile('slides')) {
            foreach ($request->file('slides') as $slide) {
                $fileNameToStore = time().'.'.$slide->getClientOriginalExtension();
                $fileNameToStore = $slide->store('uploads/home-slides', ['disk' => 'my_files']);
                $homeSlide = new HomeSlide();
                $homeSlide->slide = $fileNameToStore;
                $homeSlide->save();
            }
        }

        return redirect()->route('admin.slides');
    }
}
