<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'organization' => 'nullable|string|max:255',
            'team_size' => 'nullable|integer|min:1|max:1000',
            'plan_interest' => 'nullable|string|in:starter,professional,enterprise',
            'message' => 'nullable|string|max:5000',
        ]);

        ContactRequest::create($validated);

        return back()->with('success', 'Ďakujeme za váš záujem! Ozveme sa vám do 24 hodín.');
    }
}
