<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookTableController extends Controller
{
    public function create()
    {
        return view('book-table');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'guests' => 'required|integer|min:1|max:10',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'special_requests' => 'nullable|string|max:1000',
        ]);

        // Booking logic will be implemented later
        return redirect()->route('book-table.create')
            ->with('success', 'Your table has been reserved successfully! We will send you a confirmation email shortly.');
    }
} 