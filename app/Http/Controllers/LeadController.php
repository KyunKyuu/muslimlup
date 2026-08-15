<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Handle waitlist/newsletter subscription.
     */
    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        // Here we could store to database or trigger an event/mail notification.
        // For demonstration, we set a flash session message.

        return back()->with('success', 'Terima kasih! Anda telah terdaftar dalam daftar prioritas Mlup.');
    }
}
