<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return view('dashboard/usrdashboard');
    }
}
