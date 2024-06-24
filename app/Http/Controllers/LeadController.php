<?php

// app/Http/Controllers/LeadController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; // Import Redirect facade
use App\Models\Lead;

class LeadController extends Controller
{
    public function showForm()
    {
        return view('sp.youcandoit.index');
    }

    public function storeLead(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Assuming ref_id is optional and fetched from session or other source
        $ref_id = session('ref_id', null);
        $validated['ref_id'] = $ref_id;

        Lead::create($validated);

        // Redirect to Wave's home page
        return Redirect::route('wave.home');
    }
}


