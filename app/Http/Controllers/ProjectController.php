<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProjectController extends Controller
{

    public function indexForm(){
        return view("projects.createproject");
      }

      public function index()
      {
          
      $projects = Projects::paginate(4);
      $projects->getCollection()->transform(function ($project) {
        $project->description = Str::limit($project->description, 200);
        return $project;
    });

    return view('projects.projects', compact('projects'));
      }
      public function store(Request $request)
      {
          $request->validate([
              'title' => 'required|string|max:255',
              'description' => 'required|string',
              'image' => 'image|mimes:jpeg,png,jpg,gif|max:8048',
          ]);
      
          // Create a new Project instance
          $project = new Projects([
              'title' => $request->get('title'),
              'description' => $request->get('description'),
          ]);
      
        
          if ($request->hasFile('image')) {
              $image = request()->file('image');
           
              list($path,$file_name)=$this->moveFile($image);
              $project->image=$path;
            
          }
      
          $project->save();
          return redirect()->route('projects.index')->with('success', 'Project created successfully!');
      }
      

      public function singleproject($projectid){
           $project = Projects::findOrFail($projectid);
          
         $otherprojects=Projects::where('id', '!=', $projectid)->get();
        return view("projects.singleproject",compact('project','otherprojects'));
      }
      
      protected function moveFile($file)
      {
          $directory = 'uploads/projects/';
          $file_name = md5(microtime(true) . mt_rand()) . '.' . $file->getClientOriginalExtension();
          $path = $directory . $file_name;
  
          $file->move(storage_path('app/public/' . $directory), $file_name);
  
          return [$path, $file_name];
      }
}
