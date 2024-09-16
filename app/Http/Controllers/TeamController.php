<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;

class TeamController extends Controller
{
    public function create()
    {
        return view('team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        $imagePath = $request->file('image')->store('uploads', 'public');

        // Save data to the database
        $teamMember = new TeamMember();
        $teamMember->name = $request->name;
        $teamMember->position = $request->position;
        $teamMember->image = $imagePath;
        $teamMember->save();

        return redirect()->route('team.create')->with('success', 'Team member added successfully.');
    }
}
