<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;

class ServiceController extends Controller
{
    public function index(){
        $teamMembers = TeamMember::all();

        // Pass both tours and team members to the home view
        return view('services', compact('teamMembers'));
    }
}
