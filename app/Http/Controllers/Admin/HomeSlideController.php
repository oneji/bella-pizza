<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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
        if($request->hasFile('slide')) {
            $fileNameToStore = time().'.'.$request->file('slide')->getClientOriginalExtension();
            $fileNameToStore = $request->file('slide')->store('uploads/home-slides', ['disk' => 'my_files']);

            $homeSlide = new HomeSlide();
            $homeSlide->slide = $fileNameToStore;
            $homeSlide->slide_caption = $request->slide_caption;
            $homeSlide->save();
        } else {
            $request->session()->flash('error', 'Please choose file.');
        }        

        return redirect()->route('admin.slides');
    }

    public function delete($id)
    {
        $homeSlide = HomeSlide::find($id);
        Storage::disk('my_files')->delete($homeSlide->slide);
        $homeSlide->delete();

        return redirect()->route('admin.slides');
    }
}
