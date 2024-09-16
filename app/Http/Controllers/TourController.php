<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('tour.toursview', compact('tours'));
    }
    public function create()
    {
        return view('tour/create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        $imagePath = $request->file('image')->store('uploads', 'public');
        

        // Create a new Tour instance
        $tour = new Tour();
        $tour->title = $request->input('title');
        $tour->price = $request->input('price');
        $tour->description = $request->input('description');
        $tour->image = $imagePath;
        $tour->save();

        return redirect()->back()->with('success', 'Tour created successfully.');
    }
     public function destroy(Tour $tour)
    {
        $tour->delete();
        return redirect()->route('tours.index')->with('success', 'Tour deleted successfully!');
    }
}

