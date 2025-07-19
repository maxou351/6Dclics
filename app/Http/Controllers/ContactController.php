<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'message' => ['nullable', 'string', 'min:10', 'max:5000'],
            'demande' => 'nullable|in:accompagnement,creation,renseignement,autre',
        ]);

        // Tu peux ici envoyer un mail, stocker dans la BDD, etc.
        Mail::to('max.morelli3@gmail.com')->send(new ContactMessage($validated));
        // dd('ici 1');
        return redirect()->back()->with('success', true);
    }
}
