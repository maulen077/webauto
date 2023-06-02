<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $message = $request->input('message');

        Contacts::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'message' => $message,
        ]);


        return redirect()->back()->with('Успешно', 'Спасибо за ваше сообщение!');
    }

    public function show()
    {
        return view('contacts');
    }
}
