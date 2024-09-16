<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\TeamMember;

class PostController extends Controller
{
    public function index(){
        
        $tours = Tour::all();
        
        $teamMembers = TeamMember::all();

        return view('posts', compact('tours', 'teamMembers'));
    }
}