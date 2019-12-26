<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactMessage;

class ContactController extends Controller
{
    public function get()
    {
        $contactMessages = ContactMessage::get();

        return view('admin.contact', [
            'contactMessages' => $contactMessages
        ]);
    }

    public function delete($id, Request $request)
    {
        $contactMessage = ContactMessage::find($id);
        $contactMessage->delete($id);

        $request->session()->flash('success', 'Contact message has been successfully deleted.');

        return redirect()->route('admin.contact');
    }
}
