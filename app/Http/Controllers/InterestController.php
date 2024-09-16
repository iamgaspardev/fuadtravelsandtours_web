<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Models\Interest;

class InterestController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullName' => 'required',
            'phone' => 'required',
            'interestedOn' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Interest::create($validatedData);

        return back()->with('success', 'Form submitted successfully!');
    }

    public function index()
    {
        $interests = Interest::latest()->get();
        return view('packageprice', compact('interests'));
    }

    public function dashboard()
    {
        $interests = Interest::all();
        return view('interests.interest', compact('interests'));
    }

    public function destroy(Interest $interest)
    {
        $interest->delete();
        return back()->with('success', 'Entry deleted successfully!');
    }
}
