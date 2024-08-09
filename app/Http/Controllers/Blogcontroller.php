<?php

namespace App\Http\Controllers;
use App\Models\blogs;
use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function blogindex()
    {
        $blogs=blogs::paginate(4);
        return view("blogs.blog",compact('blogs'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function createblogform()
    {
        return view("blogs.createblog");
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:8048',
        ]);
    
        // Create a new Project instance
        $project = new blogs([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
        ]);
    
      
        if ($request->hasFile('image')) {
            $image = request()->file('image');
         
            list($path,$file_name)=$this->moveFile($image);
            $project->image=$path;
          
        }
    
        $project->save();
        return redirect()->route('blog')->with('success', 'Project created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function singleblog(string $id)
    {
       return view("blogs.singleblog");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function moveFile($file){
        $directory='uploads/blogs/';
        
        $file_name=md5(microtime(true) . mt_Rand()) . '.' . $file->getClientOriginalExtension();
        $path=$directory . $file_name;
        $file->move(storage_path('app/public/' .$directory),$file_name);
        // dd($file);
        return array($path,$file_name);
    } 
}
