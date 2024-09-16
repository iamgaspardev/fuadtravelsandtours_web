<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testmonials', compact('testimonials'));
    }

    public function create()
    {
        return view('testmonial.testmonials');
    }
     public function manage()
    {
        $testimonials = Testimonial::all();
        return view('testmonial.managetestmonial', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'message' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        Testimonial::create([
            'name' => $request->name,
            'location' => $request->location,
            'message' => $request->message,
            'image' => $imagePath,
        ]);

        return back()->with('success', 'Testimonial added successfully.');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        Storage::disk('public')->delete($testimonial->image);
        $testimonial->delete();

        return back()->with('success', 'Testimonial deleted successfully.');
    }
}