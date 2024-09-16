<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\TeamMember;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all tours
        $tours = Tour::all();
        
        // Fetch all team members
        $teamMembers = TeamMember::all();

        // Pass both tours and team members to the home view
        return view('home', compact('tours', 'teamMembers'));
    }
    
}