<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
         // Fetch all tours
        $tours = Tour::all();
        
        // Fetch all team members
        $teamMembers = TeamMember::all();
        return view('about', compact('tours', 'teamMembers'));
    }
}