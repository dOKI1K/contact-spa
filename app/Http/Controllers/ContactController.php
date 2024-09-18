<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $contact_info = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|max:2000',
        ]);

        if (strpos($contact_info['message'], 'http') !== false) {
            return redirect()->back()->with('error', 'No se permiten links en el mensaje');
        }

        if (!preg_match('/[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ\s\.\,\-\(\)\?\¿\!\¡\:\;\"\'\%\$\#\&\*\+\=\/\@\[\]\{\}\^\~\`\´\º\ª\|\<\>]/', $contact_info['message'])) {
            return redirect()->back()->with('error', 'No se permiten caracteres especiales en el mensaje');
        }

        if (preg_match('/[А-Яа-яЁё]/u', $contact_info['message'])) {
            return redirect()->back()->with('error', 'No se permiten caracteres cirílicos en el mensaje');
        }

        $emails = User::where('role', 'admin')->pluck('email')->toArray();

        foreach ($emails as $email) {
            Mail::to($email)->send(new ContactMail($contact_info));
        }

        return back()->with('success', __('Thanks for contacting us!'));
    }
}
