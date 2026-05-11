<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waitlist;

class WaitlistController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate the incoming data
        $validated = $request->validate([
            'contact' => 'required|string|max:255',
            'type' => 'required|string|in:email,whatsapp',
        ]);

        // 2. Create the record in the DB
        Waitlist::create($validated);

        // 3. Return a success response to Axios
        return response()->json(['message' => 'Successfully joined the waitlist'], 201);
    }
}
