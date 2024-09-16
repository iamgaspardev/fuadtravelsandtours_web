<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Blog;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
public function index()
{
$tours = Tour::all();
$blogs = Blog::all();

return view('blog', compact('tours', 'blogs'));
}
 public function homeland()
    {
        $blogs = Blog::all();
        return view('blog.blogsview', compact('blogs'));
    }
public function create()
{
return view('blog.uploadblog');
}

public function store(Request $request)
{
    
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    Log::info('Validation passed');
    $imagePath = $request->file('image')->store('uploads', 'public');
    Log::info('Image path:', ['path' => $imagePath]);

   
    $blog = Blog::create([
        'title' => $request->title,
        'content' => $request->content,
        'image' => $imagePath,
    ]);

    Log::info('Blog created:', ['blog' => $blog]);

    return redirect()->route('blogs.create')->with('success', 'Blog post added successfully!');
}
public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.home')->with('success', 'Blog post deleted successfully!');
    }


}