<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;

class AboutController extends Controller
{
    public function get()
    {
        $about = About::get()->first();

        return view('admin.about', [
            'about' => $about
        ]);
    }

    public function save(Request $request)
    {
        $about = About::get()->first();

        if($about) {
            $about->update([
                'address' => $request->address,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'phone_number' => $request->phone_number,
                'opening_hours' => $request->opening_hours,
            ]);
        } else {
            $about = new About($request->toArray());
            $about->save();
        }

        $request->session()->flash('success', 'Information has been successfully updated.');
        
        return redirect()->route('admin.about');
    }
}
