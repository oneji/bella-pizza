<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\ContactMessage;

class ContactController extends Controller
{
    public function get()
    {
        $about = About::get()->first();

        return view('site.contact', [
            'about' => $about
        ]);
    }

    public function save(Request $request)
    {
        $contactMessage = new ContactMessage();
        $contactMessage->name = $request->name;
        $contactMessage->email = $request->email;
        $contactMessage->message = $request->message;
        $contactMessage->save();

        return redirect()->route('site.contact');
    }
}
