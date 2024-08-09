<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery; 
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    
    public function showGalleryForm()
    {
        return view('gallery.addphoto'); 
    }

    
    public function store(Request $request)
    {
      
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:8048',
            'category' => 'required|in:skills,education,financial,health', // Validate against the allowed categories
        ]);
       
        

        $gallery = new Gallery([
            'category' => $request->get('category'),
        ]);
        
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            list($path, $file_name) = $this->moveFile($image);

            $gallery->photo = $path;
        } 
     
        $gallery->save();
       

        return redirect()->route('gallery')->with('success', 'Image uploaded successfully!');
    }

    // Display all gallery items
    public function index(Request $request)
    {
        $galleries = Gallery::query();

        $category = $request->input('category');
        if ($category) {
            $galleries->where('category', $category);
        }

        $galleries = $galleries->get();

        return view('gallery.gallery', [
            'galleries' => $galleries,
            'category' => $category,
        ]);
    }

    // Show a single gallery item


    // Handle file upload
    protected function moveFile($file)
    {
        
        $directory = 'uploads/teams/';
        $file_name = md5(microtime(true) . mt_rand()) . '.' . $file->getClientOriginalExtension();
        $path = $directory . $file_name;

        $file->move(storage_path('app/public/' . $directory), $file_name);

        return [$path, $file_name];
    }
}
